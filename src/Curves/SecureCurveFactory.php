<?php

namespace Mdanter\Ecc\Curves;

use Mdanter\Ecc\Exception\InsecureCurveException;
use Mdanter\Ecc\Exception\UnsupportedCurveException;
use Mdanter\Ecc\Math\GmpMathInterface;
use Mdanter\Ecc\Math\MathAdapterFactory;
use Mdanter\Ecc\Primitives\GeneratorPoint;

/**
 * Similar to CurveFactory, but only returns secure implementations
 */
class SecureCurveFactory extends CurveFactory
{
    /**
     * @param string $name
     * @return NamedCurveFp
     */
    public static function getCurveByName(string $name): NamedCurveFp
    {
        $adapter = MathAdapterFactory::getAdapter();
        $nistFactory = static::getNistFactory($adapter);
        $brainpoolFactory = static::getBrainpoolFactory($adapter);
        $secpFactory = static::getSecpFactory($adapter);

        switch ($name) {
            case SecgCurve::NAME_SECP_112R1:
            case SecgCurve::NAME_SECP_192K1:
            case NistCurve::NAME_P192:
            case NistCurve::NAME_P224:
                throw new InsecureCurveException('This is not a secure curve: '. $name);
            case SecgCurve::NAME_SECP_256K1:
                return $secpFactory->optimizedCurve256k1();
            case SecgCurve::NAME_SECP_256R1:
                return $secpFactory->optimizedCurve256r1();
            case NistCurve::NAME_P256:
                return $nistFactory->optimizedCurve256();
            case SecgCurve::NAME_SECP_384R1:
                return $secpFactory->optimizedCurve384r1();
            case NistCurve::NAME_P384:
                return $nistFactory->optimizedCurve384();
            case NistCurve::NAME_P521:
                return $nistFactory->optimizedCurve521();
            case BrainpoolCurve::NAME_P256R1:
                return $brainpoolFactory->optimizedCurve256r1();
            case BrainpoolCurve::NAME_P384R1:
                return $brainpoolFactory->optimizedCurve384r1();
            case BrainpoolCurve::NAME_P512R1:
                return $brainpoolFactory->optimizedCurve512r1();
            default:
                $error = new UnsupportedCurveException('Unknown curve.');
                $error->setCurveName($name);
                throw $error;
        }
    }

    /**
     * @param string $name
     * @return GeneratorPoint
     */
    public static function getGeneratorByName(string $name): GeneratorPoint
    {
        $adapter = MathAdapterFactory::getAdapter();
        $nistFactory = static::getNistFactory($adapter);
        $brainpoolFactory = static::getBrainpoolFactory($adapter);
        $secpFactory = static::getSecpFactory($adapter);

        switch ($name) {
            case SecgCurve::NAME_SECP_112R1:
            case SecgCurve::NAME_SECP_192K1:
            case NistCurve::NAME_P192:
            case NistCurve::NAME_P224:
                throw new InsecureCurveException('This is not a secure curve: '. $name);
            case NistCurve::NAME_P256:
                return $nistFactory->generator256(null, true);
            case NistCurve::NAME_P384:
                return $nistFactory->generator384(null, true);
            case NistCurve::NAME_P521:
                return $nistFactory->generator521(null, true);
            case BrainpoolCurve::NAME_P256R1:
                return $brainpoolFactory->generator256r1(null, true);
            case BrainpoolCurve::NAME_P384R1:
                return $brainpoolFactory->generator384r1(null, true);
            case BrainpoolCurve::NAME_P512R1:
                return $brainpoolFactory->generator512r1(null, true);
            case SecgCurve::NAME_SECP_256K1:
                return $secpFactory->generator256k1(null, true);
            case SecgCurve::NAME_SECP_256R1:
                return $secpFactory->generator256r1(null, true);
            case SecgCurve::NAME_SECP_384R1:
                return $secpFactory->generator384r1(null, true);
            default:
                $error = new UnsupportedCurveException('Unknown generator.');
                $error->setCurveName($name);
                throw $error;
        }
    }

    /**
     * @param GmpMathInterface $math
     * @return NistCurve
     */
    protected static function getNistFactory(GmpMathInterface $math): NistCurve
    {
        return new SecureNistCurve($math);
    }

    /**
     * @param GmpMathInterface $math
     * @return BrainpoolCurve
     */
    protected static function getBrainpoolFactory(GmpMathInterface $math): BrainpoolCurve
    {
        return new SecureBrainpoolCurve($math);
    }

    /**
     * @param GmpMathInterface $math
     * @return SecgCurve
     */
    protected static function getSecpFactory(GmpMathInterface $math): SecgCurve
    {
        return new SecureSecgCurve($math);
    }
}
