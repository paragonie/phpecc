<?php
declare(strict_types=1);

namespace Mdanter\Ecc\Optimized;

use GMP;
use Mdanter\Ecc\Primitives\PointInterface;

interface OptimizedCurveOpsInterface
{
    public function scalarMult(GMP $scalar, PointInterface $point): PointInterface;

    public function scalarMultBase(GMP $scalar): PointInterface;

    public function addPoints(PointInterface $a, PointInterface $b): PointInterface;

    public function doublePoint(PointInterface $point): PointInterface;

    public function modInverse(GMP $scalar): GMP;

    public function isOnCurve(PointInterface $point): bool;
}
