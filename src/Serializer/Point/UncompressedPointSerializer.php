<?php
declare(strict_types=1);

namespace Mdanter\Ecc\Serializer\Point;

use GMP;
use Mdanter\Ecc\Primitives\PointInterface;
use Mdanter\Ecc\Primitives\CurveFpInterface;
use Mdanter\Ecc\Serializer\Util\CurveOidMapper;
use Mdanter\Ecc\Util\BinaryString;

class UncompressedPointSerializer implements PointSerializerInterface
{
    /**
     * @param PointInterface $point
     * @return string
     */
    public function serialize(PointInterface $point): string
    {
        $length = CurveOidMapper::getByteSize($point->getCurve()) * 2;

        $hexString = '04';
        $hexString .= str_pad(gmp_strval($point->getX(), 16), $length, '0', STR_PAD_LEFT);
        $hexString .= str_pad(gmp_strval($point->getY(), 16), $length, '0', STR_PAD_LEFT);

        return $hexString;
    }

    /**
     * @param CurveFpInterface $curve
     * @param string           $string
     * @return PointInterface
     */
    public function unserialize(CurveFpInterface $curve, string $string): PointInterface
    {
        if (BinaryString::substring($string, 0, 2) != '04') {
            throw new \InvalidArgumentException('Invalid data: only uncompressed keys are supported.');
        }

        $string = BinaryString::substring($string, 2);
        $dataLength = BinaryString::length($string);

        /** @var GMP $x */
        $x = gmp_init(BinaryString::substring($string, 0, $dataLength / 2), 16);
        /** @var GMP $y */
        $y = gmp_init(BinaryString::substring($string, $dataLength / 2), 16);

        return $curve->getPoint($x, $y);
    }
}
