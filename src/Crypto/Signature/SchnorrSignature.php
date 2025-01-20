<?php

declare(strict_types=1);

namespace Mdanter\Ecc\Crypto\Signature;

use Mdanter\Ecc\Curves\CurveFactory;
use Mdanter\Ecc\Curves\SecgCurve;
use Mdanter\Ecc\Primitives\JacobianPoint;
use Mdanter\Ecc\Primitives\PointInterface;

class SchnorrSignature
{
    public const CHALLENGE = 'BIP0340/challenge';
    public const AUX       = 'BIP0340/aux';
    public const NONCE     = 'BIP0340/nonce';

    public function sign(string $privateKey, string $message, string $randomK = null): array
    {
        // private key must be a hex string
        if (ctype_xdigit($privateKey) === false) {
            throw new \InvalidArgumentException('Private key must be a hex string');
        }

        // hash the message
        $hash = ctype_xdigit($message) === true ? $message : hash('sha256', $message);

        // create a secp256k1 curve
        $generator = CurveFactory::getGeneratorByName(SecgCurve::NAME_SECP_256K1);

        // initialize order (Curve.N)
        $n = gmp_init(JacobianPoint::CurveN, 16);

        // initialize private key
        $d = gmp_init($privateKey, 16);

        if ($randomK === null) {
            // initialize randomness
            $randomK = bin2hex(random_bytes(32));
        }

        if (ctype_xdigit($randomK) === false) {
            throw new \InvalidArgumentException('Randomness must be a hex string');
        }

        // calculate multiplied point
        $point = $generator->mul($d);

        // is the Y coordinate even?
        $isEvenY = gmp_cmp(gmp_mod($point->getY(), 2), 0) === 0;

        // scalar is private key if Y is even, otherwise it's order - scalar
        $scalar = $d;

        if ($isEvenY === false) {
            $scalar = gmp_sub($n, $scalar);
        }

        $auxSingle = hash('sha256', self::AUX);
        $tagAux    = $auxSingle . $auxSingle;

        // concatenate the tag and the random k and hash it
        $auxHash       = hash('sha256', hex2bin($tagAux . $randomK));
        $auxRandNumber = gmp_init($auxHash, 16);

        // calculate the nonce
        $nonce = gmp_xor($scalar, $auxRandNumber);

        $tagNonceSingle = hash('sha256', self::NONCE);
        $tagNonce       = $tagNonceSingle . $tagNonceSingle;

        // concatenate the tag and the nonce and hash it
        $nonceHash   = hash('sha256', hex2bin($tagNonce . $this->gmp_hexval($nonce) . $this->gmp_hexval($point->getX()) . $hash));
        $nonceNumber = gmp_init($nonceHash, 16);

        $k0      = gmp_mod($nonceNumber, $n);
        $k0Point = $generator->mul($k0);

        // is the Y coordinate even?
        $isEvenYKPoint = gmp_cmp(gmp_mod($k0Point->getY(), 2), 0) === 0;

        // k0Scalar is k0 if Y is even, otherwise it's order - k0Scalar
        $k0Scalar = $k0;

        if ($isEvenYKPoint === false) {
            $k0Scalar = gmp_sub($n, $k0Scalar);
        }

        // Schnorr Challenge
        $tagChallengeSingle = hash('sha256', self::CHALLENGE);
        $tagChallenge       = $tagChallengeSingle . $tagChallengeSingle;

        // convert the hex to binary so it is NOT hashed as a simple string
        $finalChallenge       = hash('sha256', hex2bin($tagChallenge . $this->gmp_hexval($k0Point->getX()) . $this->gmp_hexval($point->getX()) . $hash));
        $finalChallengeNumber = gmp_init($finalChallenge, 16);

        $k0PointX = $this->gmp_hexval($k0Point->getX());
        $finalVal = gmp_mod(gmp_add($k0Scalar, gmp_mul($finalChallengeNumber, $scalar)), $n);

        $signature = $k0PointX . $this->gmp_hexval($finalVal);

        return [
            'signature' => $signature,
            'message'   => $message,
            'publicKey' => $this->gmp_hexval($point->getX()),
        ];
    }

    public function verify(string $publicKey, string $signature, string $message): bool
    {
        // public key must be a hex string
        if (ctype_xdigit($publicKey) === false) {
            throw new \InvalidArgumentException('Public key must be a hex string');
        }

        ['r' => $r, 's' => $s, 'm' => $m, 'P' => $P] = $this->initSchnorrVerify($signature, $message, $publicKey);

        $tagChallengeSingle = hash('sha256', self::CHALLENGE);
        $tagChallenge       = $tagChallengeSingle . $tagChallengeSingle;
        $paddedR            = str_pad(gmp_strval($r, 16), 64, '0', STR_PAD_LEFT);

        // convert the hex to binary so it is NOT hashed as a simple string
        $concatToHash = hex2bin($tagChallenge . $paddedR . gmp_strval($P->getX(), 16) . $m);
        $schnorrVal   = hash('sha256', $concatToHash);

        $e = gmp_mod(gmp_init($schnorrVal, 16), gmp_init(JacobianPoint::CurveN, 16));

        return $this->finalizeSchnorrVerify($r, $P, $s, $e);
    }

    private function gmp_hexval(\GMP $gmp): string
    {
        // gmp_strval does not properly pad hexadecimal values
        $hex = gmp_strval($gmp, 16);

        if (mb_strlen($hex) % 2 === 0) {
            return $hex;
        }

        return '0' . $hex;
    }

    private function finalizeSchnorrVerify(\GMP $r, PointInterface $P, \GMP $s, \GMP $e): bool
    {
        $pointBase = (new JacobianPoint())->getBase();

        $R = $pointBase->multiplyAndAddUnsafe(
            $P,
            $s,
            $pointBase->mod(gmp_neg($e), gmp_init(JacobianPoint::CurveN, 16))
        );

        if (!$R || !$R->hasEvenY() || gmp_cmp($R->getX(), $r) !== 0) {
            return false;
        }

        return true;
    }

    private function initSchnorrVerify(string $signature, string $message, string $publicKey): array
    {
        $r = gmp_init(mb_substr($signature, 0, 64), 16);
        $s = gmp_init(mb_substr($signature, 64, 64), 16);
        $m = ctype_xdigit($message) === true ? $message : hash('sha256', $message);

        $secp256k1Curve = CurveFactory::getCurveByName(SecgCurve::NAME_SECP_256K1);

        $yCoordinate = $secp256k1Curve->recoverYfromX(false, gmp_init($publicKey, 16));

        $P = $secp256k1Curve->getPoint(gmp_init($publicKey, 16), $yCoordinate);

        return [
            'r' => $r,
            's' => $s,
            'm' => $m,
            'P' => $P,
        ];
    }
}
