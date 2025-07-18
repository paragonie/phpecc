<?php
declare(strict_types=1);
namespace Mdanter\Ecc\Curves;

use Mdanter\Ecc\Exception\InsecureCurveException;
use Mdanter\Ecc\Primitives\GeneratorPoint;
use Mdanter\Ecc\Random\RandomNumberGeneratorInterface;

class SecureSecgCurve extends SecgCurve
{

    /**
     * @throws InsecureCurveException
     */
    public function curve112r1(): NamedCurveFp
    {
        throw new InsecureCurveException('secp112r1 is not a secure elliptic curve');
    }

    /**
     * @throws InsecureCurveException
     */
    public function curve192k1(): NamedCurveFp
    {
        throw new InsecureCurveException('secp192r1 is not a secure elliptic curve');
    }

    /**
     * @inheritDoc
     * @throws InsecureCurveException
     */
    public function curve256k1(): NamedCurveFp
    {
        $curve = parent::curve256k1();
        if (!$curve->isOpensslAvailable()) {
            throw new InsecureCurveException('Cannot securely use non-optimized secp256k1 without OpenSSL support');
        }
        return $curve;
    }

    /**
     * @inheritDoc
     * @throws InsecureCurveException
     */
    public function curve256r1(): NamedCurveFp
    {
        $curve = parent::curve256r1();
        if (!$curve->isOpensslAvailable()) {
            throw new InsecureCurveException('Cannot securely use non-optimized secp256r1 without OpenSSL support');
        }
        return $curve;
    }

    /**
     * @inheritDoc
     * @throws InsecureCurveException
     */
    public function curve384r1(): NamedCurveFp
    {
        $curve = parent::curve384r1();
        if (!$curve->isOpensslAvailable()) {
            throw new InsecureCurveException('Cannot securely use non-optimized secp384r1 without OpenSSL support');
        }
        return $curve;
    }

    /**
     * @inheritDoc
     */
    public function generator256k1(?RandomNumberGeneratorInterface $randomGenerator = null, bool $optimized = true): GeneratorPoint
    {
        return parent::generator256k1($randomGenerator, $optimized);
    }

    /**
     * @inheritDoc
     */
    public function generator256r1(?RandomNumberGeneratorInterface $randomGenerator = null, bool $optimized = true): GeneratorPoint
    {
        return parent::generator256r1($randomGenerator, $optimized);
    }

    /**
     * @inheritDoc
     */
    public function generator384r1(?RandomNumberGeneratorInterface $randomGenerator = null, bool $optimized = true): GeneratorPoint
    {
        return parent::generator384r1($randomGenerator, $optimized);
    }
}
