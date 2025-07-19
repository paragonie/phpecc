<?php
declare(strict_types=1);

namespace Mdanter\Ecc\Crypto\Signature;

use Exception;
use GMP;
use InvalidArgumentException;
use Mdanter\Ecc\Exception\IncorrectAlgorithmException;
use Mdanter\Ecc\Util\BinaryString;
use Mdanter\Ecc\Crypto\Key\{
    PrivateKeyInterface,
    PublicKeyInterface
};
use Mdanter\Ecc\Curves\CurveFactory;
use Mdanter\Ecc\Curves\SecgCurve;
use Mdanter\Ecc\Curves\SecureCurveFactory;
use Mdanter\Ecc\Math\ConstantTimeMath;
use Mdanter\Ecc\Primitives\JacobianPoint;
use Mdanter\Ecc\Primitives\PointInterface;

class SchnorrSigner
{
    public const CHALLENGE = 'BIP0340/challenge';
    public const AUX       = 'BIP0340/aux';
    public const NONCE     = 'BIP0340/nonce';

    /**
     * @param PrivateKeyInterface $key
     * @param string $message
     * @param string|null $randomK
     * @return Signature
     *
     * @throws Exception
     */
    public function signWithKey(
        #[\SensitiveParameter]
        PrivateKeyInterface $key,
        #[\SensitiveParameter]
        string $message,
        #[\SensitiveParameter]
        ?string $randomK = null
    ): Signature {
        $secret = gmp_strval($key->getSecret(), 16);
        $results = $this->sign($secret, $message, $randomK);

        // Bit-size >> 2 == number of hex characters
        $l = $key->getCurve()->getSize() >> 2;

        // Deconstruct as a Signature object:
        $r = gmp_init(BinaryString::substring($results['signature'], 0, $l), 16);
        $s = gmp_init(BinaryString::substring($results['signature'], $l), 16);
        return new Signature($r, $s, Signature::TYPE_SCHNORR);
    }

    /**
     * @param PublicKeyInterface $key
     * @param Signature $signature
     * @param string $message
     * @return bool
     */
    public function verifyWithKey(
        PublicKeyInterface $key,
        Signature $signature,
        string $message
    ): bool {
        if (!(hash_equals(Signature::TYPE_SCHNORR, $signature->getSignatureType()))) {
            throw new IncorrectAlgorithmException('This is not a Schnorr signature');
        }
        $ptX = gmp_strval($key->getPoint()->getX(), 16);
        $x = str_pad($ptX, 64, '0', STR_PAD_LEFT);
        $serialized = $this->formatSignature($key, $signature);
        return $this->verify($x, $serialized, $message);
    }

    /**
     * Format a Signature object as expected by verify()
     *
     * @param PublicKeyInterface $publicKey
     * @param SignatureInterface $signature
     * @return string
     */
    public function formatSignature(PublicKeyInterface $publicKey, SignatureInterface $signature): string
    {
        // Bit-size >> 2 == number of hex characters
        $l = $publicKey->getCurve()->getSize() >> 2;

        // Encode as R || S, as hex strings:
        $r = str_pad(gmp_strval($signature->getR(), 16), $l, '0', STR_PAD_LEFT);
        $s = str_pad(gmp_strval($signature->getS(), 16), $l, '0', STR_PAD_LEFT);
        return $r . $s;
    }

    /**
     * Create a Schnorr Signature.
     *
     * @param string $privateKey - Must be a hexadecimal string
     * @param string $message - The message being signed
     * @param string|null $randomK - Random k-value; must be a hex-encoded string if present
     * @return array
     *
     * @throws Exception
     */
    public function sign(
        #[\SensitiveParameter]
        string $privateKey,
        #[\SensitiveParameter]
        string $message,
        #[\SensitiveParameter]
        ?string $randomK = null
    ): array {
        $constantTime = new ConstantTimeMath();
        // private key must be a hex string
        if (ctype_xdigit($privateKey) === false) {
            throw new InvalidArgumentException('Private key must be a hex string');
        }

        // hash the message
        $hash = empty($message) || ctype_xdigit($message) === true ? $message : hash('sha256', $message);

        // create a secp256k1 curve
        $generator = SecureCurveFactory::getGeneratorByName(SecgCurve::NAME_SECP_256K1);

        // initialize order (Curve.N)
        $n = gmp_init(JacobianPoint::CURVE_N, 16);

        // initialize private key
        $d = gmp_init($privateKey, 16);

        if ($randomK === null) {
            // initialize randomness
            $randomK = sodium_bin2hex(random_bytes(32));
        }

        if (ctype_xdigit($randomK) === false) {
            throw new InvalidArgumentException('Randomness must be a hex string');
        }

        // calculate multiplied point
        $point = $generator->mul($d);

        // scalar is private key if Y is even, otherwise it's order - scalar
        $scalar = $d;

        // First, get the lowest bit of Y.
        $isEvenY = (int) ($point->getY() & 1);
        // You can always read these select() calls as a ternary
        // $result = ($cond ? $valueIfTrue : $valueIfFalse);
        $scalar = $constantTime->select(
            $isEvenY,
            gmp_sub($n, $scalar),
            $scalar
        );

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
        $nonceHash   = hash(
            'sha256',
            sodium_hex2bin($tagNonce . $this->hexValue($nonce) . $this->hexValue($point->getX()) . $hash)
        );
        $nonceNumber = gmp_init($nonceHash, 16);

        $k0      = gmp_mod($nonceNumber, $n);
        $k0Point = $generator->mul($k0);

        // k0Scalar is k0 if Y is even, otherwise it's order - k0Scalar
        $k0Scalar = $k0;
        /*
        if ($isEvenYKPoint === false) {
            $k0Scalar = gmp_sub($n, $k0Scalar);
        }
        */

        // Once again, branch-less:
        $isEvenYKPoint = (int) ($k0Point->getY() & 1);
        // Branch-less, constant-time equivalent of:
        // $k0Scalar = $isEvenYKPoint ? gmp_sub(($n, $k0Scalar) : $k0Scalar;
        $k0Scalar = $constantTime->select(
            $isEvenYKPoint,
            gmp_sub($n, $k0Scalar),
            $k0Scalar
        );

        // Schnorr Challenge
        $tagChallengeSingle = hash('sha256', self::CHALLENGE);
        $tagChallenge       = $tagChallengeSingle . $tagChallengeSingle;

        // convert the hex to binary, so it is NOT hashed as a simple string
        $finalChallenge     = hash(
            'sha256',
            sodium_hex2bin(
                $tagChallenge . $this->hexValue($k0Point->getX()) . $this->hexValue($point->getX()) . $hash
            )
        );
        $finalChallengeNumber = gmp_init($finalChallenge, 16);

        $k0PointX = $this->hexValue($k0Point->getX());
        $finalVal = $constantTime->mod(
            $constantTime->add(
                $k0Scalar,
                $constantTime->mul($finalChallengeNumber, $scalar)
            ),
            $n
        );

        $signature = $k0PointX . $this->hexValue($finalVal);

        return [
            'signature' => $signature,
            'message'   => $message,
            'publicKey' => $this->hexValue($point->getX()),
        ];
    }

    /**
     * @param string $publicKey Must be a hexadecimal string
     * @param string $signature
     * @param string $message
     * @return bool
     */
    public function verify(string $publicKey, string $signature, string $message): bool
    {
        // public key must be a hex string
        if (ctype_xdigit($publicKey) === false) {
            throw new InvalidArgumentException('Public key must be a hex string');
        }

        ['r' => $r, 's' => $s, 'm' => $m, 'P' => $P] = $this->initSchnorrVerify($signature, $message, $publicKey);

        $tagChallengeSingle = hash('sha256', self::CHALLENGE);
        $tagChallenge       = $tagChallengeSingle . $tagChallengeSingle;
        $paddedR            = str_pad(gmp_strval($r, 16), 64, '0', STR_PAD_LEFT);
        $paddedX = str_pad(gmp_strval($P->getX(), 16), 64, '0', STR_PAD_LEFT);

        // convert the hex to binary, so it is NOT hashed as a simple string
        $concatToHash = hex2bin($tagChallenge . $paddedR . $paddedX . $m);
        $schnorrVal   = hash('sha256', $concatToHash);

        $e = gmp_mod(gmp_init($schnorrVal, 16), gmp_init(JacobianPoint::CURVE_N, 16));

        return $this->finalizeSchnorrVerify($r, $P, $s, $e);
    }

    /**
     * @param GMP $gmp
     * @return string
     */
    private function hexValue(GMP $gmp): string
    {
        // gmp_strval does not properly pad hexadecimal values
        $hex = gmp_strval($gmp, 16);

        // Always ensure the result is exactly 64 characters, zero-padded from the left
        return str_pad($hex, 64, '0', STR_PAD_LEFT);
    }

    /**
     * @param GMP $r
     * @param PointInterface $P
     * @param GMP $s
     * @param GMP $e
     * @return bool
     */
    private function finalizeSchnorrVerify(GMP $r, PointInterface $P, GMP $s, GMP $e): bool
    {
        $pointBase = (new JacobianPoint())->getBase();

        $R = $pointBase->multiplyAndAddUnsafe(
            $P,
            $s,
            $pointBase->mod(gmp_neg($e), gmp_init(JacobianPoint::CURVE_N, 16))
        );

        if (!$R || !$R->hasEvenY() || gmp_cmp($R->getX(), $r) !== 0) {
            return false;
        }

        return true;
    }

    /**
     * @param string $signature
     * @param string $message
     * @param string $publicKey
     * @return array
     */
    private function initSchnorrVerify(string $signature, string $message, string $publicKey): array
    {
        $r = gmp_init(mb_substr($signature, 0, 64), 16);
        $s = gmp_init(mb_substr($signature, 64, 64), 16);
        $m = empty($message) || ctype_xdigit($message) === true ? $message : hash('sha256', $message);

        $secp256k1Curve = CurveFactory::getCurveByName(SecgCurve::NAME_SECP_256K1);

        $P = $secp256k1Curve->getPoint(
            gmp_init($publicKey, 16),
            $secp256k1Curve->recoverYfromX(false, gmp_init($publicKey, 16))
        );

        return [
            'r' => $r,
            's' => $s,
            'm' => $m,
            'P' => $P,
        ];
    }
}
