<?php
declare(strict_types=1);

namespace Mdanter\Ecc\Tests\Random;

use GMP;
use Mdanter\Ecc\EccFactory;
use Mdanter\Ecc\Crypto\Key\PrivateKey;
use Mdanter\Ecc\Curves\NistCurve;
use Mdanter\Ecc\Curves\SecureCurveFactory;
use Mdanter\Ecc\Math\ConstantTimeMath;
use Mdanter\Ecc\Random\HmacRandomNumberGenerator;
use Mdanter\Ecc\Tests\AbstractTestCase;

class HmacRandomNumberGeneratorTest extends AbstractTestCase
{
    public function testRequireValidAlgorithm()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Unsupported hashing algorithm');

        $math = EccFactory::getAdapter();
        $g = EccFactory::getNistCurves($math, true)->generator192();
        $privateKey  = new PrivateKey($math, $g, gmp_init(1, 10));
        $hash = gmp_init(hash('sha256', 'message', false), 16);

        new HmacRandomNumberGenerator($math, $privateKey, $hash, 'sha256aaaa');
    }

    public function testRetriesWithFreshCandidateBuffer(): void
    {
        $math = new ConstantTimeMath();
        $generator = SecureCurveFactory::getGeneratorByName(NistCurve::NAME_P256);
        $private = new PrivateKey($math, $generator, gmp_init(1, 10));
        $rng = new class($math, $private, gmp_init(16, 10), 'sha256') extends HmacRandomNumberGenerator {
            /** @var int[] */
            public $lengths = [];

            /** @var GMP */
            public $max;

            public function bits2int(string $bits, GMP $qlen): GMP
            {
                $this->lengths[] = strlen($bits);
                return count($this->lengths) === 1 ? $this->max : gmp_init(1, 10);
            }
        };
        $rng->max = $generator->getOrder();

        self::assertSame('1', gmp_strval($rng->generate($rng->max)));
        self::assertSame([32, 32], $rng->lengths);
    }

    public function testBits2OctetsReducesHashModuloOrder(): void
    {
        $math = new ConstantTimeMath();
        $generator = SecureCurveFactory::getGeneratorByName(NistCurve::NAME_P256);
        $private = new PrivateKey($math, $generator, gmp_init(1, 10));
        $zero = (new HmacRandomNumberGenerator($math, $private, gmp_init(0, 10), 'sha256'))
            ->generate($generator->getOrder());
        $order = (new HmacRandomNumberGenerator($math, $private, $generator->getOrder(), 'sha256'))
            ->generate($generator->getOrder());

        self::assertSame(gmp_strval($zero), gmp_strval($order));
    }

    public function testMatchesRfc6979P256Sha256Vector(): void
    {
        $math = new ConstantTimeMath();
        $generator = SecureCurveFactory::getGeneratorByName(NistCurve::NAME_P256);
        $private = new PrivateKey($math, $generator, gmp_init(
            'C9AFA9D845BA75166B5C215767B1D6934E50C3DB36E89B127B8A622B120F6721',
            16
        ));
        $hash = gmp_init(hash('sha256', 'sample'), 16);
        $nonce = (new HmacRandomNumberGenerator($math, $private, $hash, 'sha256'))
            ->generate($generator->getOrder());

        self::assertSame(
            'a6e3c57dd01abe90086538398355dd4c3b17aa873382b0f24d6129493d8aad60',
            gmp_strval($nonce, 16)
        );
    }
}
