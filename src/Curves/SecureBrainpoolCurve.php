<?php
declare(strict_types=1);
namespace Mdanter\Ecc\Curves;

use Mdanter\Ecc\Exception\InsecureCurveException;
use Mdanter\Ecc\Primitives\GeneratorPoint;
use Mdanter\Ecc\Random\RandomNumberGeneratorInterface;

class SecureBrainpoolCurve extends BrainpoolCurve
{
    /**
     * @throws InsecureCurveException
     */
    public function curve256r1(): NamedCurveFp
    {
        $curve = parent::curve256r1();
        if (!$curve->isOpensslAvailable()) {
            throw new InsecureCurveException('Cannot securely use non-optimized brainpoolP256r1 without OpenSSL support');
        }
        return $curve;
    }

    /**
     * @throws InsecureCurveException
     */
    public function curve384r1(): NamedCurveFp
    {
        $curve = parent::curve384r1();
        if (!$curve->isOpensslAvailable()) {
            throw new InsecureCurveException('Cannot securely use non-optimized brainpoolP384r1 without OpenSSL support');
        }
        return $curve;
    }

    /**
     * @throws InsecureCurveException
     */
    public function curve512r1(): NamedCurveFp
    {
        $curve = parent::curve512r1();
        if (!$curve->isOpensslAvailable()) {
            throw new InsecureCurveException('Cannot securely use non-optimized brainpoolP512r1 without OpenSSL support');
        }
        return $curve;
    }

    /**
     * @inheritDoc
     */
    public function generator256r1(
        ?RandomNumberGeneratorInterface $randomGenerator = null,
        bool $optimized = true
    ): GeneratorPoint {
        return parent::generator256r1($randomGenerator, $optimized);
    }

    /**
     * @inheritDoc
     */
    public function generator384r1(
        ?RandomNumberGeneratorInterface $randomGenerator = null,
        bool $optimized = true
    ): GeneratorPoint {
        return parent::generator384r1($randomGenerator, $optimized);
    }

    /**
     * @inheritDoc
     */
    public function generator512r1(
        ?RandomNumberGeneratorInterface $randomGenerator = null,
        bool $optimized = true
    ): GeneratorPoint {
        return parent::generator512r1($randomGenerator, $optimized);
    }
}
