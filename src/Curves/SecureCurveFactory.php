<?php

namespace Mdanter\Ecc\Curves;

use Mdanter\Ecc\Math\GmpMathInterface;
use Mdanter\Ecc\Math\MathAdapterFactory;

/**
 * Similar to CurveFactory, but only returns secure implementations
 */
class SecureCurveFactory extends CurveFactory
{
    /**
     * @param GmpMathInterface $math
     * @return NistCurve
     */
    private static function getNistFactory(GmpMathInterface $math): NistCurve
    {
        return new SecureNistCurve($math);
    }

    /**
     * @param GmpMathInterface $math
     * @return BrainpoolCurve
     */
    private static function getBrainpoolFactory(GmpMathInterface $math): BrainpoolCurve
    {
        return new SecureBrainpoolCurve($math);
    }

    /**
     * @param GmpMathInterface $math
     * @return SecgCurve
     */
    private static function getSecpFactory(GmpMathInterface $math): SecgCurve
    {
        return new SecureSecgCurve($math);
    }
}
