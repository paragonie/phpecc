<?php

declare(strict_types=1);

namespace Mdanter\Ecc\Tests\Crypto\Signature;

use Exception;
use InvalidArgumentException;
use Mdanter\Ecc\Crypto\Key\PrivateKey;
use Mdanter\Ecc\Crypto\Signature\SchnorrSigner;
use Mdanter\Ecc\Crypto\Signature\Signature;
use Mdanter\Ecc\Crypto\Signature\Signer;
use Mdanter\Ecc\Crypto\Signature\SignHasher;
use Mdanter\Ecc\Curves\NistCurve;
use Mdanter\Ecc\Curves\SecgCurve;
use Mdanter\Ecc\Curves\SecureCurveFactory;
use Mdanter\Ecc\Exception\IncorrectAlgorithmException;
use Mdanter\Ecc\Exception\InsecureCurveException;
use Mdanter\Ecc\Math\ConstantTimeMath;
use Mdanter\Ecc\Math\GmpMath;
use Mdanter\Ecc\Tests\AbstractTestCase;
use SodiumException;

/**
 * @internal
 *
 * @coversNothing
 */
final class SchnorrSignerTest extends AbstractTestCase
{
    public static function bipVectorProvider(): array
    {
        $f = fopen('vendor/bitcoin/bips/bip-0340/test-vectors.csv', 'r');
        $header = fgetcsv($f, null, ',', '"', '\\');

        $vectors = [];
        while (false !== $row = fgetcsv($f, null, ',', '"', '\\')) {
            $row = array_combine($header, $row);

            $description = "Test #{$row['index']}";
            if (!empty($row['comment'])) {
                $description .= ': ' . $row['comment'];
            }

            $vectors[$description] = [
                $row['secret key'],
                $row['public key'],
                $row['aux_rand'],
                $row['message'],
                $row['signature'],
                'TRUE' === $row['verification result'],
            ];
        }

        fclose($f);
        return $vectors;
    }

    /**
     * @dataProvider bipVectorProvider
     * @throws InsecureCurveException
     * @throws Exception
     * @throws SodiumException
     */
    public function testSchnorrVerificationAndSigning(
        string $privateKey,
        string $publicKey,
        string $auxRand,
        string $message,
        string $signature,
        bool $expectedResult
    ): void {
        // signature verification test
        try {
            $verifyResult = (new SchnorrSigner())->verify($publicKey, $signature, $message);
        } catch (Exception $e) {
            self::assertFalse($expectedResult, 'verify() can fail, but in that case the expected result must be false');
            $verifyResult = false;
        }

        self::assertSame($expectedResult, $verifyResult);

        // cannot proceed without a private key
        if (empty($privateKey)) {
            return;
        }

        // signature creation test
        try {
            $signResult = (new SchnorrSigner())->sign($privateKey, $message, $auxRand);
        } catch (Exception $e) {
            self::fail('sign() must never fail');
        }

        self::assertSame(strtolower($signature), $signResult['signature']);

        // -- // New in v2.5.0 // -- //

        $signer = (new SchnorrSigner());
        // Create objects for the same key pair:
        $generator = SecureCurveFactory::getGeneratorByName('secp256k1');
        $skObject = new PrivateKey(new ConstantTimeMath(), $generator, gmp_init($privateKey, 16));
        $pkObject = $skObject->getPublicKey();

        // Ensure the same Schnorr signature is created:
        $signResult2 = $signer->signWithKey($skObject, $message, $auxRand);
        $verifyResult2 = $signer->verifyWithKey($pkObject, $signResult2, $message);
        self::assertSame($expectedResult, $verifyResult2);

        // Ensure the same verification result occurs:
        self::assertSame($signer->formatSignature($pkObject, $signResult2), $signResult['signature']);

        // First, we make a fake "ECDSA" signature out of this Schnorr signature and ensure it's not accepted:
        $ecdsaSig = new Signature($signResult2->getR(), $signResult2->getS());

        $thrown = false;
        try {
            $signer->verifyWithKey($pkObject, $ecdsaSig, $message);
        } catch (IncorrectAlgorithmException $ex) {
            $thrown = true;
        }
        self::assertTrue($thrown, 'ECDSA / Schnorr signatures can be swapped');

        // Next, we try the inverse attack: Feeding a Schnorr sig into the ECDSA class:
        $math = new GmpMath();
        $ecdsaSigner = new Signer($math, true);
        $hash = (new SignHasher('sha256', $math))->makeHash($message, $generator);

        $thrown = false;
        try {
            $ecdsaSigner->verify($pkObject, $signResult2, $hash);
        } catch (IncorrectAlgorithmException $ex) {
            $thrown = true;
        }
        self::assertTrue($thrown, 'ECDSA / Schnorr signatures can be swapped');
    }

    /**
     * Test that signatures are always 128 characters (64 hex chars each for r and s)
     *
     * @throws Exception
     */
    public function testSignatureLengthConsistency(): void
    {
        // Test with various private keys that might produce short hex values
        $testCases = [
            ['privateKey' => '0000000000000000000000000000000000000000000000000000000000000001', 'message' => '74657374'],
            ['privateKey' => '0000000000000000000000000000000000000000000000000000000000000123', 'message' => '74657374'],
            ['privateKey' => '000000000000000000000000000000000000000000000000000000000000abcd', 'message' => '74657374'],
        ];

        foreach ($testCases as $case) {
            $schnorr = new SchnorrSigner();
            $result = $schnorr->sign($case['privateKey'], $case['message'], 'a' . str_repeat('0', 63));

            // Signature should always be exactly 128 characters
            static::assertSame(
                128,
                strlen($result['signature']),
                sprintf(
                    'Signature length should be 128, got %d for private key %s',
                    strlen($result['signature']),
                    $case['privateKey']
                )
            );

            // Public key should always be exactly 64 characters
            static::assertSame(
                64,
                strlen($result['publicKey']),
                sprintf(
                    'Public key length should be 64, got %d for private key %s',
                    strlen($result['publicKey']),
                    $case['privateKey']
                )
            );
        }
    }

    /**
     * @throws Exception
     */
    public function testRequiresHexEncodedMessages(): void
    {
        $this->expectException(InvalidArgumentException::class);
        (new SchnorrSigner())->sign(
            str_pad('1', 64, '0', STR_PAD_LEFT),
            'authorize transfer',
            str_repeat('0', 64)
        );
    }

    /**
     * @throws InsecureCurveException
     */
    public function testVerifyWithKeyRequiresSecp256k1(): void
    {
        $math = new ConstantTimeMath();
        $secp = SecureCurveFactory::getGeneratorByName(SecgCurve::NAME_SECP_256K1);
        $private = new PrivateKey($math, $secp, gmp_init(2, 10));
        $signature = (new SchnorrSigner())->signWithKey($private, '00', str_repeat('0', 64));

        $x = $private->getPublicKey()->getPoint()->getX();
        $p256 = SecureCurveFactory::getGeneratorByName(NistCurve::NAME_P256);
        $y = $p256->getCurve()->recoverYfromX(false, $x);
        $wrongCurveKey = $p256->getPublicKeyFrom($x, $y);

        $this->expectException(InvalidArgumentException::class);
        (new SchnorrSigner())->verifyWithKey($wrongCurveKey, $signature, '00');
    }

    /**
     * @throws Exception
     */
    public function testRejectsSignaturesWithTrailingBytes(): void
    {
        $signer = new SchnorrSigner();
        $signed = $signer->sign(
            str_pad('1', 64, '0', STR_PAD_LEFT),
            '00',
            str_repeat('0', 64)
        );

        self::assertFalse($signer->verify($signed['publicKey'], $signed['signature'] . 'deadbeef', '00'));
    }
}
