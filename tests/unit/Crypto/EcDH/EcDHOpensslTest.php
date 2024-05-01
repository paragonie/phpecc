<?php
declare(strict_types=1);
namespace Mdanter\Ecc\Tests\Crypto\EcDH;

use Mdanter\Ecc\Crypto\EcDH\EcDH;
use Mdanter\Ecc\Curves\BrainpoolCurve;
use Mdanter\Ecc\Curves\CurveFactory;
use Mdanter\Ecc\Curves\NamedCurveFp;
use Mdanter\Ecc\Curves\NistCurve;
use Mdanter\Ecc\Curves\SecgCurve;
use Mdanter\Ecc\Math\GmpMath;
use Mdanter\Ecc\Serializer\PrivateKey\DerPrivateKeySerializer;
use Mdanter\Ecc\Serializer\PrivateKey\PemPrivateKeySerializer;
use Mdanter\Ecc\Serializer\PublicKey\DerPublicKeySerializer;
use Mdanter\Ecc\Serializer\PublicKey\PemPublicKeySerializer;
use Mdanter\Ecc\Tests\AbstractTestCase;

class EcDHOpensslTest extends AbstractTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function curveProvider(): array
    {
        return [
            [CurveFactory::getCurveByName(BrainpoolCurve::NAME_P256R1)],
            [CurveFactory::getCurveByName(BrainpoolCurve::NAME_P384R1)],
            [CurveFactory::getCurveByName(BrainpoolCurve::NAME_P512R1)],
            [CurveFactory::getCurveByName(SecgCurve::NAME_SECP_256K1)],
            [CurveFactory::getCurveByName(NistCurve::NAME_P256)],
            [CurveFactory::getCurveByName(NistCurve::NAME_P384)],
            [CurveFactory::getCurveByName(NistCurve::NAME_P521)]
        ];
    }

    /**
     * @dataProvider curveProvider
     */
    public function testDisabledOlderPHP(NamedCurveFp $curve)
    {
        if (PHP_VERSION_ID >= 80100) {
            $this->markTestSkipped('We can test this on PHP 8.1 and newer');
        }
        if (extension_loaded('openssl')) {
            if (OPENSSL_VERSION_NUMBER >= 0x30000000) {
                $this->markTestSkipped('OpenSSL 3.x or newer is used, so we can test this.');
            }
        }
        $this->assertFalse($curve->shouldUseOpenssl());
    }

    public function testOpensslECDH()
    {
        $curve = CurveFactory::getCurveByName(NistCurve::NAME_P256);
        if (!$curve->shouldUseOpenssl()) {
            $this->markTestSkipped('OpenSSL fallback not supported in PHP < 8.1 or OpenSSL < 3.0');
        }
        $alice = file_get_contents(dirname(__DIR__, 3) . '/data/alice-p256.pem');
        $bob = file_get_contents(dirname(__DIR__, 3) . '/data/bob-p256.pem');
        $aliceP = file_get_contents(dirname(__DIR__, 3) . '/data/alice-p256-public.pem');
        $bobP = file_get_contents(dirname(__DIR__, 3) . '/data/bob-p256-public.pem');

        $skSer = new PemPrivateKeySerializer(new DerPrivateKeySerializer());
        $pkSer = new PemPublicKeySerializer(new DerPublicKeySerializer());

        $bobPK = $pkSer->parse($bobP);
        $ecdh = new EcDH(new GmpMath());
        $ecdh->setSenderKey($skSer->parse($alice));
        $ecdh->setRecipientKey($bobPK);
        $shared1 = $ecdh->calculateSharedKey();

        $ecdh2 = new EcDH(new GmpMath());
        $ecdh2->disableOpenssl();
        $ecdh2->setSenderKey($skSer->parse($alice));
        $ecdh2->setRecipientKey($bobPK);
        $shared2 = $ecdh2->calculateSharedKey();

        $this->assertGMPSame($shared1, $shared2);

        $alicePK = $pkSer->parse($aliceP);
        $ecdh3 = new EcDH(new GmpMath());
        $ecdh3->setSenderKey($skSer->parse($bob));
        $ecdh3->setRecipientKey($alicePK);
        $shared3 = $ecdh2->calculateSharedKey();
        $this->assertGMPSame($shared1, $shared3);
    }
}
