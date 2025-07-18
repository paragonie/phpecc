<?php
declare(strict_types=1);

namespace Mdanter\Ecc\Serializer\PrivateKey;

use Exception;
use FG\ASN1\Exception\ParserException;
use Mdanter\Ecc\Crypto\Key\PrivateKeyInterface;

/**
 * PEM Private key formatter
 *
 * @link https://tools.ietf.org/html/rfc5915
 */
class PemPrivateKeySerializer implements PrivateKeySerializerInterface
{
    /**
     * @var DerPrivateKeySerializer
     */
    private $derSerializer;

    /**
     * @param DerPrivateKeySerializer $derSerializer
     */
    public function __construct(DerPrivateKeySerializer $derSerializer)
    {
        $this->derSerializer = $derSerializer;
    }

    /**
     * {@inheritDoc}
     * @throws Exception
     * @see PrivateKeySerializerInterface::serialize
     */
    public function serialize(
        #[\SensitiveParameter]
        PrivateKeyInterface $key
    ): string {
        $privateKeyInfo = $this->derSerializer->serialize($key);

        $content  = '-----BEGIN EC PRIVATE KEY-----'.PHP_EOL;
        $content .= trim(chunk_split(base64_encode($privateKeyInfo), 64, PHP_EOL)).PHP_EOL;
        $content .= '-----END EC PRIVATE KEY-----';

        return $content;
    }

    /**
     * {@inheritDoc}
     * @throws ParserException
     * @see PrivateKeySerializerInterface::parse
     */
    public function parse(
        #[\SensitiveParameter]
        string $formattedKey
    ): PrivateKeyInterface {
        $formattedKey = str_replace('-----BEGIN EC PRIVATE KEY-----', '', $formattedKey);
        $formattedKey = str_replace('-----END EC PRIVATE KEY-----', '', $formattedKey);

        $data = base64_decode($formattedKey);

        return $this->derSerializer->parse($data);
    }
}
