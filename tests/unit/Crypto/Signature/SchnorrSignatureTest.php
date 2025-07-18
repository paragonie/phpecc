<?php

declare(strict_types=1);

namespace Mdanter\Ecc\Tests\Crypto\Signature;

use Mdanter\Ecc\Crypto\Signature\SchnorrSignature;
use Mdanter\Ecc\Tests\AbstractTestCase;

/**
 * @internal
 *
 * @coversNothing
 */
final class SchnorrSignatureTest extends AbstractTestCase
{
    public function bipVectorInformation()
    {
        $fileVectors = TEST_DATA_DIR . '/bip-schnorr-test-vectors.json';
        $vectors     = json_decode(file_get_contents($fileVectors), true);

        $items = [];

        // get all information into a single array
        foreach ($vectors as $vector) {
            $items[] = [
                [
                    'privateKey' => empty($vector['d']) ? null : $vector['d'],
                    'publicKey'  => $vector['pk'],
                    'message'    => $vector['m'],
                    'signature'  => $vector['sig'],
                    'result'     => $vector['result'],
                    'aux'        => $vector['aux'],
                ],
            ];
        }

        return $items;
    }

    /**
     * @dataProvider bipVectorInformation
     *
     * @param array $vector
     */
    public function testSchnorrVerification($vector): void
    {
        // get information
        $publicKey = $vector['publicKey'];
        $message   = $vector['message'];
        $signature = $vector['signature'];
        $result    = $vector['result'];

        // verify signature
        try {
            $testResult = (new SchnorrSignature())->verify($publicKey, $signature, $message);
        } catch (\Exception $e) {
            $testResult = false;
        }

        // make assertion
        static::assertSame($result, $testResult);
    }

    /**
     * @dataProvider bipVectorInformation
     *
     * @param array $vector
     */
    public function testSchnorrSigning($vector): void
    {
        // cannot sign without private key
        if ($vector['privateKey'] === null) {
            static::assertNull($vector['privateKey']);

            return;
        }

        // get information
        $privateKey = $vector['privateKey'];
        $auxRand    = $vector['aux'];
        $message    = $vector['message'];
        $signature  = $vector['signature'];

        // sign
        try {
            $testResult = (new SchnorrSignature())->sign($privateKey, $message, $auxRand);
        } catch (\Exception $e) {
            $testResult = false;
        }

        $finalResult = $testResult === false ? false : strtoupper($testResult['signature']);

        // make assertion
        static::assertSame($signature, $finalResult);
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
