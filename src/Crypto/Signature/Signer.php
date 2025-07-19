<?php

declare(strict_types=1);

namespace Mdanter\Ecc\Crypto\Signature;

use Exception;
use FG\ASN1\Exception\ParserException;
use GMP;
use Mdanter\Ecc\Curves\NamedCurveFp;
use Mdanter\Ecc\Curves\NistCurve;
use Mdanter\Ecc\Curves\SecgCurve;
use Mdanter\Ecc\Exception\IncorrectAlgorithmException;
use Mdanter\Ecc\Math\ConstantTimeMath;
use Mdanter\Ecc\Math\GmpMathInterface;
use Mdanter\Ecc\Crypto\Key\PrivateKeyInterface;
use Mdanter\Ecc\Crypto\Key\PublicKeyInterface;
use Mdanter\Ecc\OpensslFallbackTrait;
use Mdanter\Ecc\Primitives\CurveFpInterface;
use Mdanter\Ecc\Primitives\OptimizedCurveInterface;
use Mdanter\Ecc\Random\RandomGeneratorFactory;
use Mdanter\Ecc\Serializer\Signature\DerSignatureSerializer;
use Mdanter\Ecc\Util\BinaryString;
use SodiumException;

class Signer
{
    use OpensslFallbackTrait;

    /**
     *
     * @var GmpMathInterface
     */
    private $adapter;

    /**
     * @var bool
     */
    private $disallowMalleableSig;

    /**
     *
     * @param GmpMathInterface $adapter
     * @param bool $disallowMalleableSig
     */
    public function __construct(GmpMathInterface $adapter, bool $disallowMalleableSig = false)
    {
        $this->adapter = $adapter;
        $this->disallowMalleableSig = $disallowMalleableSig;
    }

    /**
     * @param CurveFpInterface $curve
     * @return string
     */
    protected function getDefaultHashAlgorithm(CurveFpInterface $curve): string
    {
        if ($curve instanceof NamedCurveFp) {
            switch ($curve->getName()) {
                case NistCurve::NAME_P256:
                case SecgCurve::NAME_SECP_256K1:
                    return 'sha256';
                case NistCurve::NAME_P384:
                    return 'sha394';
                case NistCurve::NAME_P521:
                    return 'sha512';
            }
        }
        $size = $curve->getSize();
        if ($size <= 256) {
            return 'sha256';
        }
        if ($size <= 384) {
            return 'sha384';
        }
        return 'sha512';
    }

    /**
     * @param PrivateKeyInterface $key
     * @param string $message
     * @param string|null $hashAlgo
     *
     * @return SignatureInterface
     * @throws ParserException
     * @throws SodiumException
     */
    public function signMessage(
        #[\SensitiveParameter]
        PrivateKeyInterface $key,
        #[\SensitiveParameter]
        string $message,
        ?string $hashAlgo = null
    ): SignatureInterface {
        $generator = $key->getPoint();
        $curve = $generator->getCurve();
        if (is_null($hashAlgo)) {
            $hashAlgo = $this->getDefaultHashAlgorithm($curve);
        }
        if ($curve instanceof NamedCurveFp && $curve->shouldUseOpenssl()&& !$this->disableOpenssl) {
            /* Note: OpenSSL disregards $randomK. */
            return $curve->signMessage($key, $message, $hashAlgo);
        }
        $hasher = new SignHasher($hashAlgo, $this->adapter);
        $hash = $hasher->makeHash($message, $generator);
        $rng = RandomGeneratorFactory::getRandomGenerator();
        return $this->sign(
            $key,
            $hash,
            $rng->generate($generator->getOrder())
        );
    }

    /**
     * @param PrivateKeyInterface $key
     * @param GMP $truncatedHash - hash truncated for use in ECDSA
     * @param GMP $randomK
     * @return SignatureInterface
     */
    public function sign(
        #[\SensitiveParameter]
        PrivateKeyInterface $key,
        #[\SensitiveParameter]
        GMP $truncatedHash,
        #[\SensitiveParameter]
        GMP $randomK
    ): SignatureInterface {
        $math = new ConstantTimeMath();
        $generator = $key->getPoint();
        $curve = $generator->getCurve();
        $modMath = $math->getModularArithmetic($generator->getOrder());

        $k = $math->mod($randomK, $generator->getOrder());
        if ($curve instanceof OptimizedCurveInterface) {
            $optimized = $curve->getOptimizedCurveOps();
            $p1 = $optimized->scalarMultBase($k);
        } else {
            $p1 = $generator->mul($k);
        }
        $r = $p1->getX();
        /** @var GMP $zero */
        $zero = gmp_init(0, 10);
        if ($math->equals($r, $zero)) {
            throw new \RuntimeException("Error: random number R = 0");
        }
        $kInv = $math->inverseMod($k, $generator->getOrder());

        // S = (d*R + h) / k (mod P) = (d*R + h) * k^-1 (mod P)
        $s = $modMath->mul(
            $modMath->add($truncatedHash, $math->mul($key->getSecret(), $r)),
            $kInv
        );
        if ($math->equals($s, $zero)) {
            throw new \RuntimeException("Error: random number S = 0");
        }

        // Prevent high-order values for S
        if ($this->disallowMalleableSig) {
            $n = $generator->getOrder();
            $halfOrder = $math->rightShift($n, 1);
            if ($math->cmp($s, $halfOrder) > 0) {
                $s = $math->sub($n, $s);
            }
        }

        return new Signature($r, $s);
    }

    /**
     * @param PublicKeyInterface $key
     * @param SignatureInterface $sig
     * @param string $message
     * @param string|null $hashAlgo
     * @return bool
     *
     * @throws SodiumException
     * @throws Exception
     */
    public function verifyMessage(
        PublicKeyInterface $key,
        SignatureInterface $sig,
        #[\SensitiveParameter]
        string $message,
        ?string $hashAlgo = null
    ): bool {
        $generator = $key->getGenerator();
        $curve = $generator->getCurve();
        if (is_null($hashAlgo)) {
            $hashAlgo = $this->getDefaultHashAlgorithm($curve);
        }
        if ($curve instanceof NamedCurveFp && $curve->shouldUseOpenssl()) {
            /* Note: OpenSSL disregards $randomK. */
            $encoder = new DerSignatureSerializer();
            $encodedSig = $encoder->serialize($sig);
            return $curve->verifyMessage($key, $encodedSig, $message, $hashAlgo);
        }
        $hasher = new SignHasher($hashAlgo, $this->adapter);
        $hash = $hasher->makeHash($message, $generator);
        return $this->verify($key, $sig, $hash);
    }

    /**
     * @param PublicKeyInterface $key
     * @param SignatureInterface $signature
     * @param GMP $hash
     * @return bool
     */
    public function verify(PublicKeyInterface $key, SignatureInterface $signature, GMP $hash): bool
    {
        $generator = $key->getGenerator();
        $n = $generator->getOrder();
        $r = $signature->getR();
        $s = $signature->getS();

        // Make sure this isn't a Schnorr signature:
        if (!(hash_equals(Signature::TYPE_ECDSA, $signature->getSignatureType()))) {
            throw new IncorrectAlgorithmException('This is not an ECDSA signature');
        }

        $math = $this->adapter;
        /** @var GMP $one */
        $one = gmp_init(1, 10);
        if ($math->cmp($r, $one) < 0 || $math->cmp($r, $math->sub($n, $one)) > 0) {
            return false;
        }

        if ($math->cmp($s, $one) < 0 || $math->cmp($s, $math->sub($n, $one)) > 0) {
            return false;
        }
        $halfOrder = $math->rightShift($n, 1);
        if ($this->disallowMalleableSig && $math->cmp($s, $halfOrder) > 0) {
            return false;
        }

        $modMath = $math->getModularArithmetic($n);
        $c = $math->inverseMod($s, $n);
        $u1 = $modMath->mul($hash, $c);
        $u2 = $modMath->mul($r, $c);
        $xy = $generator->mul($u1)->add($key->getPoint()->mul($u2));
        $v = $math->mod($xy->getX(), $n);

        return BinaryString::constantTimeCompare($math->toString($v), $math->toString($r));
    }
}
