<?php
declare(strict_types=1);

namespace Mdanter\Ecc\Serializer\PrivateKey;

use GMP;
use FG\ASN1\ASNObject;
use FG\ASN1\Universal\Sequence;
use FG\ASN1\Universal\Integer;
use FG\ASN1\Universal\BitString;
use FG\ASN1\Universal\OctetString;
use Mdanter\Ecc\Crypto\Key\PrivateKeyInterface;
use Mdanter\Ecc\Curves\NamedCurveFp;
use Mdanter\Ecc\Exception\UnsupportedCurveException;
use Mdanter\Ecc\Math\GmpMathInterface;
use Mdanter\Ecc\Math\MathAdapterFactory;
use Mdanter\Ecc\Serializer\Util\CurveOidMapper;
use Mdanter\Ecc\Serializer\PublicKey\DerPublicKeySerializer;
use FG\ASN1\ExplicitlyTaggedObject;

/**
 * PEM Private key formatter
 *
 * @link https://tools.ietf.org/html/rfc5915
 */
class DerPrivateKeySerializer implements PrivateKeySerializerInterface
{

    const VERSION = 1;

    /**
     * @var GmpMathInterface|null
     */
    private $adapter;

    /**
     * @var DerPublicKeySerializer
     */
    private $pubKeySerializer;

    /**
     * @param ?GmpMathInterface       $adapter
     * @param ?DerPublicKeySerializer $pubKeySerializer
     */
    public function __construct(
        ?GmpMathInterface $adapter = null,
        ?DerPublicKeySerializer $pubKeySerializer = null
    ) {
        $this->adapter = $adapter ?: MathAdapterFactory::getAdapter();
        $this->pubKeySerializer = $pubKeySerializer ?: new DerPublicKeySerializer($this->adapter);
    }

    /**
     * {@inheritDoc}
     * @see \Mdanter\Ecc\Serializer\PrivateKey\PrivateKeySerializerInterface::serialize()
     */
    public function serialize(
        #[\SensitiveParameter]
        PrivateKeyInterface $key
    ): string {
        $curve = $key->getPoint()->getCurve();
        if (!($curve instanceof NamedCurveFp)) {
            throw new UnsupportedCurveException('The curve is not a named curve');
        }
        $privateKeyInfo = new Sequence(
            new Integer(self::VERSION),
            new OctetString($this->formatKey($key)),
            new ExplicitlyTaggedObject(0, CurveOidMapper::getCurveOid($curve)),
            new ExplicitlyTaggedObject(1, $this->encodePubKey($key))
        );

        return $privateKeyInfo->getBinary();
    }

    /**
     * @param PrivateKeyInterface $key
     * @return BitString
     */
    private function encodePubKey(
        #[\SensitiveParameter]
        PrivateKeyInterface $key
    ): BitString {
        return new BitString(
            $this->pubKeySerializer->getUncompressedKey($key->getPublicKey())
        );
    }

    /**
     * @param PrivateKeyInterface $key
     * @return string
     */
    private function formatKey(
        #[\SensitiveParameter]
        PrivateKeyInterface $key
    ): string {
        return gmp_strval($key->getSecret(), 16);
    }

    /**
     * {@inheritDoc}
     * @see \Mdanter\Ecc\Serializer\PrivateKey\PrivateKeySerializerInterface::parse()
     * @throws \FG\ASN1\Exception\ParserException
     */
    public function parse(
        #[\SensitiveParameter]
        string $formattedKey
    ): PrivateKeyInterface
    {
        $asnObject = ASNObject::fromBinary($formattedKey);

        if (! ($asnObject instanceof Sequence) || $asnObject->getNumberofChildren() !== 4) {
            throw new \RuntimeException('Invalid data.');
        }

        $children = $asnObject->getChildren();

        $version = $children[0];

        if ($version->getContent() != 1) {
            throw new \RuntimeException('Invalid data: only version 1 (RFC5915) keys are supported.');
        }

        /** @var GMP $key */
        $key = gmp_init($children[1]->getContent(), 16);
        $oid = $children[2]->getContent()[0];
        $generator = CurveOidMapper::getGeneratorFromOid($oid);

        return $generator->getPrivateKeyFrom($key);
    }
}
