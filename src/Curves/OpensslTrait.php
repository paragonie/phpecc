<?php
declare(strict_types=1);
namespace Mdanter\Ecc\Curves;

use Exception;
use FG\ASN1\Exception\ParserException;
use GMP;
use Mdanter\Ecc\OpensslFallbackTrait;
use Mdanter\Ecc\Crypto\Key\{
    PrivateKeyInterface,
    PublicKeyInterface
};
use Mdanter\Ecc\Crypto\Signature\SignatureInterface;
use Mdanter\Ecc\Exception\OpensslException;
use Mdanter\Ecc\Primitives\PointInterface;
use Mdanter\Ecc\Serializer\PrivateKey\{
    DerPrivateKeySerializer,
    PemPrivateKeySerializer
};
use Mdanter\Ecc\Serializer\PublicKey\{
    DerPublicKeySerializer,
    PemPublicKeySerializer
};
use Mdanter\Ecc\Serializer\Signature\DerSignatureSerializer;
use SodiumException;

/**
 * Adds support for deferring to OpenSSL
 *
 * @property string $name
 */
trait OpensslTrait
{
    use OpensslFallbackTrait;

    public function shouldUseOpenssl(): bool
    {
        /* Users can disable the OpenSSL fallback for a specific curve. */
        if ($this->disableOpenssl) {
            return false;
        }
        /* Otherwise, we use it... but if we can. */
        return $this->isOpensslAvailable();
    }

    /**
     * Is OpenSSL available for this curve?
     *
     * @return bool
     */
    public function isOpensslAvailable(): bool
    {
        if (!extension_loaded('openssl')) {
            /* We categorically cannot use OpenSSL if it's not installed */
            return false;
        }
        if (PHP_VERSION_ID <= 80100) {
            /* ECDH was not available before PHP 8.1 */
            return false;
        }
        // @link https://www.openssl.org/docs/man1.1.1/man3/OPENSSL_VERSION_NUMBER.html
        if (OPENSSL_VERSION_NUMBER < 0x30000000) {
            /* ECDH was not available before PHP 8.1 */
            return false;
        }
        /* Get a list of supported curves from ext-openssl. */
        $curveNames = openssl_get_curve_names();
        if (!is_array($curveNames)) {
            return false;
        }
        foreach ($curveNames as $i => $v) {
            $curveNames[$i] = strtolower($v);
        }

        /* Finally check that this curve is available to ext-openssl */
        switch ($this->name) {
            case 'nistp256':
            case 'secp256r1':
            case 'prime256v1':
                $names = ['nistp256', 'secp256r1', 'prime256v1'];
                break;
            case 'nistp384':
            case 'secp384r1':
            case 'prime384v1':
                $names = ['nistp384', 'secp384r1', 'prime384v1'];
                break;
            case 'nistp521':
            case 'secp521r1':
            case 'prime521v1':
                $names = ['nistp521', 'secp521r1', 'prime521v1'];
                break;
            default:
                $names = [strtolower($this->name)];
        }
        $intersection = array_intersect($names, $curveNames);
        return !empty($intersection);
    }

    /**
     * @param PrivateKeyInterface $sk
     * @param PublicKeyInterface $pk
     * @return PointInterface
     *
     * @throws OpensslException
     * @throws Exception
     */
    public function computeSharedSecret(
        #[\SensitiveParameter]
        PrivateKeyInterface $sk,
        PublicKeyInterface $pk
    ): PointInterface {
        if (!$this->isOpensslAvailable()) {
            throw new OpensslException('OpenSSL is not supported');
        }
        // PHPStorm inspections want this explicitly included.
        if (PHP_VERSION_ID < 70300) {
            throw new OpensslException('PHP 7.3 or newer required');
        }
        $private = $this->convertPrivateKeyToOpensslFormat($sk);
        $public = $this->convertPublicKeyToOpensslFormat($pk);

        /*
         * We are assuming this code returns an X Coordinate as raw binary.
         *
         * This is what OpenSSL 3 currently does:
         * https://github.com/openssl/openssl/blob/6a4a714045415be6720f4165c4d70a0ff229a26a/crypto/ec/ecdh_ossl.c#L114-L133
         */
        $shared = openssl_pkey_derive($public, $private);
        if (is_bool($shared)) {
            throw new OpensslException('OpenSSL error computing ECDH');
        }
        // From here, we convert back into an (X, Y) point for use with the EcDH API.
        /** @var GMP $xCoord */
        try {
            $xCoord = gmp_init(sodium_bin2hex($shared), 16);
        } catch (SodiumException $e) {
            throw new OpensslException('An error has occurred with encoding the shared secret', 0, $e);
        }
        return $this->getPoint($xCoord, $this->recoverYfromX(false, $xCoord));
    }

    /**
     * @param PrivateKeyInterface $sk
     * @param string $message
     * @param string $hashAlgo
     * @return SignatureInterface
     *
     * @throws OpensslException
     * @throws ParserException
     * @throws Exception
     */
    public function signMessage(
        #[\SensitiveParameter]
        PrivateKeyInterface $sk,
        #[\SensitiveParameter]
        string $message,
        string $hashAlgo
    ): SignatureInterface {
        if (!$this->isOpensslAvailable()) {
            throw new OpensslException('OpenSSL is not supported');
        }
        $private = $this->convertPrivateKeyToOpensslFormat($sk);
        $sig = '';
        if (!openssl_sign(
            $message,
            $sig,
            $private,
            $this->hashAlgoToConstant($hashAlgo)
        )) {
            $error = openssl_error_string() ?: '';
            throw new OpensslException('OpenSSL error: ' . $error);
        }
        // Return a signature object
        return (new DerSignatureSerializer())
            ->parse($sig);
    }

    /**
     * @param PublicKeyInterface $pk
     * @param string $signature
     * @param string $message
     * @param string $hashAlgo
     * @return bool
     *
     * @throws OpensslException
     */
    public function verifyMessage(
        PublicKeyInterface $pk,
        string $signature,
        #[\SensitiveParameter]
        string $message,
        string $hashAlgo
    ): bool {
        if (!$this->isOpensslAvailable()) {
            throw new OpensslException('OpenSSL is not supported');
        }
        $publicKey = $this->convertPublicKeyToOpensslFormat($pk);
        $algo = $this->hashAlgoToConstant($hashAlgo);
        $result = openssl_verify($message, $signature, $publicKey, $algo);
        return $result === 1;
    }

    /**
     * @param string $hashAlgo
     * @return int
     *
     * @since php 8.1
     * @requires ext-openssl
     */
    private function hashAlgoToConstant(string $hashAlgo): int
    {
        switch (strtolower($hashAlgo)) {
            case 'sha-224':
            case 'sha224':
                return OPENSSL_ALGO_SHA224;
            case 'sha-256':
            case 'sha256':
                return OPENSSL_ALGO_SHA256;
            case 'sha-384':
            case 'sha384':
                return OPENSSL_ALGO_SHA384;
            case 'sha-512':
            case 'sha512':
                return OPENSSL_ALGO_SHA512;
            default:
                throw new OpensslException('Unknown hash function for OpenSSL: ' . $hashAlgo);
        }
    }

    /**
     * @param PublicKeyInterface $pk
     * @return string
     *
     * @since php 8.1
     * @requires ext-openssl
     * @throws Exception
     */
    private function convertPublicKeyToOpensslFormat(PublicKeyInterface $pk): string
    {
        $serializer = new PemPublicKeySerializer(new DerPublicKeySerializer());
        return $serializer->serialize($pk);
    }

    /**
     * @return \OpenSSLAsymmetricKey|resource
     * @throws Exception
     * @since php 8.1
     * @requires ext-openssl
     */
    private function convertPrivateKeyToOpensslFormat(
        #[\SensitiveParameter]
        PrivateKeyInterface $sk
    ) {
        if (!extension_loaded('openssl')) {
            throw new OpensslException('OpenSSL not loaded');
        }
        $serializer = new PemPrivateKeySerializer(new DerPrivateKeySerializer());
        $serialized = $serializer->serialize($sk);
        $return = openssl_get_privatekey($serialized);
        if (is_bool($return)) {
            throw new OpensslException('Could not serialize private key');
        }

        if (PHP_VERSION_ID >= 80100) {
            if (!($return instanceof \OpenSSLAsymmetricKey)) {
                throw new OpensslException('Did not return an OpenSSL Asymmetric Key');
            }
        } else {
            if (!is_resource($return)) {
                throw new OpensslException('Did not return a resource');
            }
        }
        return $return;
    }
}
