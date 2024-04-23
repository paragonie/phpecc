<?php
declare(strict_types=1);

namespace Mdanter\Ecc\Tests\Crypto\Signature;

use Mdanter\Ecc\Crypto\Signature\Signature;
use Mdanter\Ecc\Crypto\Signature\Signer;
use Mdanter\Ecc\Crypto\Signature\SignHasher;
use Mdanter\Ecc\Curves\CurveFactory;
use Mdanter\Ecc\EccFactory;
use Mdanter\Ecc\Math\ConstantTimeMath;
use Mdanter\Ecc\Random\RandomGeneratorFactory;
use Mdanter\Ecc\Tests\AbstractTestCase;

class SignerTest extends AbstractTestCase
{
    public function testInvalidHashAlgorithm()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Unsupported hashing algorithm');
        new SignHasher("blahblah");
    }

    public function testMalleableSignatures()
    {
        $math = new ConstantTimeMath();
        $adapter = EccFactory::getAdapter();
        $generator = CurveFactory::getGeneratorByName('secp256k1');
        $hashAlgo = 'sha256';
        $n = $generator->getOrder();
        $k = RandomGeneratorFactory::getRandomGenerator()->generate($n);

        $hasher = new SignHasher($hashAlgo, $adapter);
        $hash = $hasher->makeHash('testing', $generator);
        $privateKey = $generator->createPrivateKey();
        $publicKey = $privateKey->getPublicKey();

        $signer = new Signer($math);
        $nonMalleableSigner = new Signer($math, true);
        $sig1 = $signer->sign($privateKey, $hash, $k);
        $this->assertTrue($signer->verify($publicKey, $sig1, $hash));
        $sig2 = $nonMalleableSigner->sign($privateKey, $hash, $k);
        $this->assertTrue($nonMalleableSigner->verify($publicKey, $sig2, $hash));

        $s1 = $sig1->getS();
        $s2 = $sig2->getS();
        // if (S1 == S2), both are lower than order / 2
        if ($math->cmp($s1, $s2) === 0) {
            // Force high-order S
            $halfOrder = $math->rightShift($n, 1);
            $s1 = $math->sub($n, $s1);
            $sig1 = new Signature($sig2->getR(), $s1);
        }
        $this->assertFalse($nonMalleableSigner->verify($publicKey, $sig1, $hash));
        $this->assertTrue($signer->verify($publicKey, $sig1, $hash));
    }
}
