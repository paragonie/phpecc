<?php
declare(strict_types=1);
namespace Mdanter\Ecc\Curves;

use Mdanter\Ecc\Exception\InsecureCurveException;
use Mdanter\Ecc\Primitives\GeneratorPoint;
use Mdanter\Ecc\Random\RandomNumberGeneratorInterface;

/**
 * Selects secure NIST curves
 */
class SecureNistCurve extends NistCurve
{
    /**
     * @throws InsecureCurveException
     */
    public function curve192(): NamedCurveFp
    {
        throw new InsecureCurveException('P-192 is not a secure elliptic curve');
    }

    /**
     * @throws InsecureCurveException
     */
    public function curve224(): NamedCurveFp
    {
        throw new InsecureCurveException('P-224 is not a secure elliptic curve');
    }

    /**
     * @return NamedCurveFp
     * @throws InsecureCurveException
     */
    public function curve256(): NamedCurveFp
    {
        $curve = parent::curve256();
        if (!$curve->isOpensslAvailable()) {
            throw new InsecureCurveException('Cannot securely use non-optimized P-256 without OpenSSL support');
        }
        return $curve;
    }

    /**
     * @return NamedCurveFp
     * @throws InsecureCurveException
     */
    public function curve384(): NamedCurveFp
    {
        $curve = parent::curve384();
        if (!$curve->isOpensslAvailable()) {
            throw new InsecureCurveException('Cannot securely use non-optimized P-384 without OpenSSL support');
        }
        return $curve;
    }

    /**
     * @return NamedCurveFp
     * @throws InsecureCurveException
     */
    public function curve521(): NamedCurveFp
    {
        $curve = parent::curve521();
        if (!$curve->isOpensslAvailable()) {
            throw new InsecureCurveException('Cannot securely use non-optimized P-521 without OpenSSL support');
        }
        return $curve;
    }

    /**
     * @param RandomNumberGeneratorInterface|null $randomGenerator
     * @throws InsecureCurveException
     */
    public function generator192(?RandomNumberGeneratorInterface $randomGenerator = null): GeneratorPoint
    {
        throw new InsecureCurveException('P-192 is not a secure elliptic curve');
    }

    /**
     * @param RandomNumberGeneratorInterface|null $randomGenerator
     * @throws InsecureCurveException
     */
    public function generator224(?RandomNumberGeneratorInterface $randomGenerator = null): GeneratorPoint
    {
        throw new InsecureCurveException('P-224 is not a secure elliptic curve');
    }

    /**
     * Returns an NIST P-256 generator.
     *
     * @param  ?RandomNumberGeneratorInterface $randomGenerator
     * @param bool $optimized
     * @return GeneratorPoint
     */
    public function generator256(?RandomNumberGeneratorInterface $randomGenerator = null, bool $optimized = true): GeneratorPoint
    {
        return parent::generator256($randomGenerator, $optimized);
    }

    /**
     * Returns an NIST P-384 generator.
     *
     * @param  ?RandomNumberGeneratorInterface $randomGenerator
     * @param bool $optimized
     * @return GeneratorPoint
     */
    public function generator384(?RandomNumberGeneratorInterface $randomGenerator = null, bool $optimized = true): GeneratorPoint
    {
        return parent::generator384($randomGenerator, $optimized);
    }

    /**
     * Returns an NIST P-521 generator.
     *
     * @param  ?RandomNumberGeneratorInterface $randomGenerator
     * @param bool $optimized
     * @return GeneratorPoint
     */
    public function generator521(?RandomNumberGeneratorInterface $randomGenerator = null, bool $optimized = true): GeneratorPoint
    {
        return parent::generator521($randomGenerator, $optimized);
    }
}
