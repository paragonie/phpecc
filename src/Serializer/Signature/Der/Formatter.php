<?php
declare(strict_types=1);

namespace Mdanter\Ecc\Serializer\Signature\Der;

use Exception;
use FG\ASN1\Universal\Integer;
use FG\ASN1\Universal\Sequence;
use Mdanter\Ecc\Crypto\Signature\SignatureInterface;

class Formatter
{
    /**
     * @param SignatureInterface $signature
     * @return Sequence
     * @throws Exception
     */
    public function toAsn(SignatureInterface $signature): Sequence
    {
        return new Sequence(
            new Integer(gmp_strval($signature->getR())),
            new Integer(gmp_strval($signature->getS()))
        );
    }

    /**
     * @param SignatureInterface $signature
     * @return string
     * @throws Exception
     */
    public function serialize(SignatureInterface $signature): string
    {
        return $this->toAsn($signature)->getBinary();
    }
}
