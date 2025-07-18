<?php
declare(strict_types=1);

namespace Mdanter\Ecc\Serializer\Signature;

use Exception;
use FG\ASN1\Exception\ParserException;
use Mdanter\Ecc\Crypto\Signature\SignatureInterface;

class DerSignatureSerializer implements DerSignatureSerializerInterface
{
    /**
     * @var Der\Parser
     */
    private $parser;

    /**
     * @var Der\Formatter
     */
    private $formatter;

    public function __construct()
    {
        $this->parser = new Der\Parser();
        $this->formatter = new Der\Formatter();
    }

    /**
     * @param SignatureInterface $signature
     * @return string
     * @throws Exception
     */
    public function serialize(SignatureInterface $signature): string
    {
        return $this->formatter->serialize($signature);
    }

    /**
     * @param string $binary
     * @return SignatureInterface
     * @throws ParserException
     */
    public function parse(string $binary): SignatureInterface
    {
        return $this->parser->parse($binary);
    }
}
