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
}
