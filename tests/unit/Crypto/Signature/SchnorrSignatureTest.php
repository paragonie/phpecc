<?php

declare(strict_types=1);

namespace Mdanter\Ecc\Tests\Crypto\Signature;

use Exception;
use Mdanter\Ecc\Crypto\Key\PrivateKey;
use Mdanter\Ecc\Crypto\Signature\SchnorrSignature;
use Mdanter\Ecc\Curves\SecureCurveFactory;
use Mdanter\Ecc\Exception\InsecureCurveException;
use Mdanter\Ecc\Math\ConstantTimeMath;
use Mdanter\Ecc\Tests\AbstractTestCase;

/**
 * @internal
 *
 * @coversNothing
 */
final class SchnorrSignatureTest extends AbstractTestCase
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
            $verifyResult = (new SchnorrSignature())->verify($publicKey, $signature, $message);
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
            $signResult = (new SchnorrSignature())->sign($privateKey, $message, $auxRand);
        } catch (Exception $e) {
            self::fail('sign() must never fail');
        }

        self::assertSame(strtolower($signature), $signResult['signature']);

        // -- // New in v2.5.0 // -- //

        // Create objects for the same key pair:
        $generator = SecureCurveFactory::getGeneratorByName('secp256k1');
        $skObject = new PrivateKey(new ConstantTimeMath(), $generator, gmp_init($privateKey, 16));
        $pkObject = $skObject->getPublicKey();

        // Ensure the same Schnorr signature is created:
        $signResult2 = (new SchnorrSignature())->signWithKey($skObject, $message, $auxRand);
        $verifyResult2 = (new SchnorrSignature())->verifyWithKey($pkObject, $signResult2, $message);
        self::assertSame($expectedResult, $verifyResult2);

        // self::assertSame(strtolower($signature), $signResult2['signature']);
        // Ensure the same verification result occurs:
    }

    /**
     * Test that signatures are always 128 characters (64 hex chars each for r and s)
     */
    public function testSignatureLengthConsistency(): void
    {
        // Test with various private keys that might produce short hex values
        $testCases = [
            ['privateKey' => '0000000000000000000000000000000000000000000000000000000000000001', 'message' => 'test'],
            ['privateKey' => '0000000000000000000000000000000000000000000000000000000000000123', 'message' => 'test'],
            ['privateKey' => '000000000000000000000000000000000000000000000000000000000000abcd', 'message' => 'test'],
        ];

        foreach ($testCases as $case) {
            $schnorr = new SchnorrSignature();
            $result = $schnorr->sign($case['privateKey'], $case['message'], 'a' . str_repeat('0', 63));

            // Signature should always be exactly 128 characters
            static::assertSame(128, strlen($result['signature']),
                sprintf('Signature length should be 128, got %d for private key %s',
                    strlen($result['signature']), $case['privateKey']));

            // Public key should always be exactly 64 characters
            static::assertSame(64, strlen($result['publicKey']),
                sprintf('Public key length should be 64, got %d for private key %s',
                    strlen($result['publicKey']), $case['privateKey']));
        }
    }
}
