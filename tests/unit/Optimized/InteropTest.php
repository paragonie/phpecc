<?php
declare(strict_types=1);
namespace Mdanter\Ecc\Tests\Optimized;

use Mdanter\Ecc\Crypto\Signature\Signer;
use Mdanter\Ecc\Curves\OptimizedCurveFp;
use Mdanter\Ecc\EccFactory;
use Mdanter\Ecc\Math\GmpMath;
use Mdanter\Ecc\Math\GmpMathInterface;
use Mdanter\Ecc\Random\RandomGeneratorFactory;
use Mdanter\Ecc\Tests\AbstractTestCase;

class InteropTest extends AbstractTestCase
{

    /**
     * @dataProvider getAdapters
     *
     * @param GmpMathInterface $adapter
     * @return void
     * @throws \Exception
     */
    public function testP256Interop(GmpMathInterface $adapter)
    {
        $nistFactory = EccFactory::getNistCurves($adapter, true);
        $signer = new Signer($adapter);

        $p256Old = $nistFactory->generator256(null, false);
        $p256New = $nistFactory->generator256(null, true);
        $this->assertNotInstanceOf(OptimizedCurveFp::class, $p256Old->getCurve());
        $this->assertInstanceOf(OptimizedCurveFp::class, $p256New->getCurve());

        $secret = gmp_init(bin2hex(random_bytes(32)), 16);

        $oldSK = $p256Old->getPrivateKeyFrom($secret);
        $newSK = $p256New->getPrivateKeyFrom($secret);


        $pk1 = $oldSK->getPublicKey();
        $pk2 = $newSK->getPublicKey();
        $this->assertGMPSame($pk1->getPoint()->getX(), $pk2->getPoint()->getX(), 'X');
        $this->assertGMPSame($pk1->getPoint()->getY(), $pk2->getPoint()->getY(), 'Y');

        $randomK = RandomGeneratorFactory::getRandomGenerator()->generate($oldSK->getPoint()->getOrder());
        $message = RandomGeneratorFactory::getRandomGenerator()->generate($oldSK->getPoint()->getOrder());

        $sig1 = $signer->sign($oldSK, $message, $randomK);
        $sig2 = $signer->sign($newSK, $message, $randomK);

        $this->assertGMPSame($sig1->getR(), $sig2->getR(), 'R');
        $this->assertGMPSame($sig1->getS(), $sig2->getS(), 'S');

        $this->assertTrue($signer->verify($pk1, $sig1, $message));
        $this->assertTrue($signer->verify($pk2, $sig1, $message));
        $this->assertTrue($signer->verify($pk1, $sig2, $message));
        $this->assertTrue($signer->verify($pk2, $sig2, $message));
    }

    /**
     * @dataProvider getAdapters
     *
     * @param GmpMathInterface $adapter
     * @return void
     * @throws \Exception
     */
    public function testP384Interop(GmpMathInterface $adapter)
    {
        $nistFactory = EccFactory::getNistCurves($adapter, true);
        $signer = new Signer($adapter);

        $p384Old = $nistFactory->generator384(null, false);
        $p384New = $nistFactory->generator384(null, true);
        $this->assertNotInstanceOf(OptimizedCurveFp::class, $p384Old->getCurve());
        $this->assertInstanceOf(OptimizedCurveFp::class, $p384New->getCurve());

        $secret = gmp_init(bin2hex(random_bytes(32)), 16);

        $oldSK = $p384Old->getPrivateKeyFrom($secret);
        $newSK = $p384New->getPrivateKeyFrom($secret);


        $pk1 = $oldSK->getPublicKey();
        $pk2 = $newSK->getPublicKey();
        $this->assertGMPSame($pk1->getPoint()->getX(), $pk2->getPoint()->getX(), 'X');
        $this->assertGMPSame($pk1->getPoint()->getY(), $pk2->getPoint()->getY(), 'Y');

        $randomK = RandomGeneratorFactory::getRandomGenerator()->generate($oldSK->getPoint()->getOrder());
        $message = RandomGeneratorFactory::getRandomGenerator()->generate($oldSK->getPoint()->getOrder());

        $sig1 = $signer->sign($oldSK, $message, $randomK);
        $sig2 = $signer->sign($newSK, $message, $randomK);

        $this->assertGMPSame($sig1->getR(), $sig2->getR(), 'R');
        $this->assertGMPSame($sig1->getS(), $sig2->getS(), 'S');

        $this->assertTrue($signer->verify($pk1, $sig1, $message));
        $this->assertTrue($signer->verify($pk2, $sig1, $message));
        $this->assertTrue($signer->verify($pk1, $sig2, $message));
        $this->assertTrue($signer->verify($pk2, $sig2, $message));
    }
}
