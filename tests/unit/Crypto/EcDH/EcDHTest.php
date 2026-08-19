<?php
declare(strict_types=1);

namespace Mdanter\Ecc\Tests\Crypto\EcDH;

use GMP;
use Mdanter\Ecc\Crypto\EcDH\EcDH;
use Mdanter\Ecc\Crypto\Key\PublicKey;
use Mdanter\Ecc\Curves\NistCurve;
use Mdanter\Ecc\Curves\SecureCurveFactory;
use Mdanter\Ecc\EccFactory;
use Mdanter\Ecc\Exception\ExchangeException;
use Mdanter\Ecc\Exception\InsecureCurveException;
use Mdanter\Ecc\Math\ConstantTimeMath;
use Mdanter\Ecc\Primitives\Point;
use Mdanter\Ecc\Primitives\PointInterface;
use Mdanter\Ecc\Serializer\Point\UncompressedPointSerializer;
use Mdanter\Ecc\Tests\AbstractTestCase;

class EcDHTest extends AbstractTestCase
{
    public function testExceptionOnInvalidState()
    {
        $this->expectException(ExchangeException::class);
        $this->expectExceptionMessage('Sender key not set');
        $adapter = EccFactory::getAdapter();
        $ecdh = new EcDH($adapter);
        $ecdh->calculateSharedKey();
    }

    public function testExceptionOnInvalidState1()
    {
        $this->expectException(ExchangeException::class);
        $this->expectExceptionMessage('Recipient key not set');
        $G = EccFactory::getNistCurves()->generator521();
        $adapter = EccFactory::getAdapter();
        $ecdh = new EcDH($adapter);
        $ecdh->setSenderKey($G->createPrivateKey());
        $ecdh->calculateSharedKey();
    }

    public function testNoExceptionWhenCorrectState()
    {
        $G = EccFactory::getNistCurves()->generator521();
        $adapter = EccFactory::getAdapter();
        $ecdh = new EcDH($adapter);
        $ecdh->setSenderKey($G->createPrivateKey());
        $ecdh->setRecipientKey($G->createPrivateKey()->getPublicKey());

        // Call twice, covers checking if shared key already created
        $this->assertInstanceOf(\GMP::class, $ecdh->calculateSharedKey());
        $this->assertInstanceOf(\GMP::class, $ecdh->calculateSharedKey());
    }

    public function testHappyPath()
    {
        $adapter = EccFactory::getAdapter();
        $nistFactory = EccFactory::getNistCurves($adapter);
        ;
        $p256New = $nistFactory->generator256(null, true);

        // Generate some keys:
        $aliceScalar = gmp_init(bin2hex(random_bytes(32)), 16);
        $bobScalar = gmp_init(bin2hex(random_bytes(32)), 16);

        $alicePrivate = $p256New->getPrivateKeyFrom($aliceScalar);
        $bobPrivate = $p256New->getPrivateKeyFrom($bobScalar);
        $alicePublic = $alicePrivate->getPublicKey();
        $bobPublic = $bobPrivate->getPublicKey();

        $a2b = $alicePrivate->createExchange($bobPublic)->calculateSharedKey();
        $b2a = $bobPrivate->createExchange($alicePublic)->calculateSharedKey();

        $this->assertGMPSame($a2b, $b2a);
    }

    public function testChecksCurveMismatch()
    {
        $g521Priv = gmp_init("933647627474908018426578245710479111318013963124904148836279534969474325811737975019251749444245449462797733969359656644867805138716790671286350292237562679", 10);
        $p1 = EccFactory::getNistCurves()->generator521()->getPrivateKeyFrom($g521Priv);

        $g192Pub = "0468e3642493c4e433a741c78ab67ee607d94925c506e9554d43de2d1c71493334c681cf4683aee863d90e9732745d5bc7";
        $g192 = EccFactory::getNistCurves(null, true)->generator192();

        $p2 = (new UncompressedPointSerializer())->unserialize($g192->getCurve(), $g192Pub);
        $pubkey = $g192->getPublicKeyFrom($p2->getX(), $p2->getY());

        $this->expectException(ExchangeException::class);
        $this->expectExceptionMessage("Invalid ECDH exchange - Point does not exist on our curve");

        $p1
            ->createExchange($pubkey)
            ->calculateSharedKey()
        ;
    }

    /**
     * @throws InsecureCurveException
     */
    public function testUsesOpensslForSharedSecret(): void
    {
        $math = new ConstantTimeMath();
        $generator = SecureCurveFactory::getGeneratorByName(NistCurve::NAME_P256);
        if (!$generator->getCurve()->shouldUseOpenssl()) {
            self::markTestSkipped('OpenSSL ECDH is unavailable');
        }

        $alice = $generator->getPrivateKeyFrom(gmp_init(11, 10));
        $bobPoint = $generator->getPrivateKeyFrom(gmp_init(19, 10))->getPublicKey()->getPoint();
        $tracking = new class($math, $generator->getCurve(), $bobPoint->getX(), $bobPoint->getY()) extends Point {
            /** @var int */
            public $mulCalls = 0;

            public function mul(GMP $multiplier): PointInterface
            {
                ++$this->mulCalls;
                return parent::mul($multiplier);
            }
        };
        $recipient = new PublicKey($math, $generator, $tracking);

        (new EcDH($math))->setSenderKey($alice)->setRecipientKey($recipient)->calculateSharedKey();
        self::assertSame(0, $tracking->mulCalls);
    }
}
