<?php
declare(strict_types=1);

namespace Mdanter\Ecc\Serializer\Point;

use GMP;
use Mdanter\Ecc\Math\GmpMathInterface;
use Mdanter\Ecc\Math\NumberTheory;
use Mdanter\Ecc\Primitives\CurveFpInterface;
use Mdanter\Ecc\Primitives\PointInterface;
use Mdanter\Ecc\Serializer\Util\CurveOidMapper;

class CompressedPointSerializer implements PointSerializerInterface
{
    /**
     * @var GmpMathInterface
     */
    private $adapter;

    /**
     * @var NumberTheory
     */
    private $theory;

    public function getNumberTheory(): NumberTheory
    {
        return $this->theory;
    }

    /**
     * CompressedPointSerializer constructor.
     * @param GmpMathInterface $adapter
     */
    public function __construct(GmpMathInterface $adapter)
    {
        $this->adapter = $adapter;
        $this->theory = $adapter->getNumberTheory();
    }

    /**
     * @param PointInterface $point
     * @return string
     */
    public function getPrefix(PointInterface $point): string
    {
        /** @var GMP $two */
        $two = gmp_init(2, 10);
        /** @var GMP $zero */
        $zero = gmp_init(0, 10);
        if ($this->adapter->equals($this->adapter->mod($point->getY(), $two), $zero)) {
            return '02';
        } else {
            return '03';
        }
    }

    /**
     * @param PointInterface $point
     * @return string
     */
    public function serialize(PointInterface $point): string
    {
        $length = CurveOidMapper::getByteSize($point->getCurve()) * 2;

        $hexString = $this->getPrefix($point);
        $hexString .= str_pad(gmp_strval($point->getX(), 16), $length, '0', STR_PAD_LEFT);

        return $hexString;
    }

    /**
     * @param CurveFpInterface $curve
     * @param string $string - hex serialized compressed point
     * @return PointInterface
     */
    public function unserialize(CurveFpInterface $curve, string $string): PointInterface
    {
        $prefix = substr($string, 0, 2);
        if ($prefix !== '03' && $prefix !== '02') {
            throw new \InvalidArgumentException('Invalid data: only compressed keys are supported.');
        }

        /** @var GMP $x */
        $x = gmp_init(substr($string, 2), 16);
        $recoveredY = $curve->recoverYfromX($prefix === '03', $x);

        return $curve->getPoint($x, $recoveredY);
    }
}
