<?php
declare(strict_types=1);

namespace Mdanter\Ecc\Tests\Random;

use Mdanter\Ecc\Math\GmpMath;
use Mdanter\Ecc\Math\ConstantTimeMath;
use Mdanter\Ecc\Primitives\CurveFp;
use Mdanter\Ecc\Primitives\CurveParameters;
use Mdanter\Ecc\Primitives\GeneratorPoint;
use Mdanter\Ecc\Random\DebugDecorator;
use Mdanter\Ecc\Random\RandomGeneratorFactory;
use Mdanter\Ecc\Random\RandomNumberGenerator;
use Mdanter\Ecc\Tests\AbstractTestCase;

class RandomGeneratorFactoryTest extends AbstractTestCase
{
    public function testDebug()
    {
        $debugOn = true;

        $rng = RandomGeneratorFactory::getRandomGenerator($debugOn);
        $this->assertInstanceOf(DebugDecorator::class, $rng);
        $this->assertInstanceOf(\GMP::class, $rng->generate(gmp_init(111)));

        $adapter = new GmpMath();
        $parameters = new CurveParameters(32, gmp_init(23, 10), gmp_init(1, 10), gmp_init(1, 10));
        $curve = new CurveFp($parameters, $adapter);
        $point = new GeneratorPoint($adapter, $curve, gmp_init(13, 10), gmp_init(7, 10), gmp_init(7, 10));

        $privateKey = $point->getPrivateKeyFrom(gmp_init(1));
        $rng = RandomGeneratorFactory::getHmacRandomGenerator($privateKey, gmp_init(1), 'sha256', $debugOn);
        $this->assertInstanceOf(DebugDecorator::class, $rng);
        $this->assertInstanceOf(\GMP::class, $rng->generate(gmp_init(111)));

        ob_clean();
    }

    public function testGenerateUsesRejectionSampling(): void
    {
        $values = ["\x00", "\x07", "\x05", "\x03"];
        $calls = 0;
        $rng = new RandomNumberGenerator(
            new ConstantTimeMath(),
            static function () use (&$values, &$calls): string {
                ++$calls;
                return array_shift($values);
            });

        self::assertSame('3', gmp_strval($rng->generate(gmp_init(5, 10))));
        self::assertSame(4, $calls);
    }
}
