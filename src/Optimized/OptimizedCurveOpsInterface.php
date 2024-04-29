<?php
declare(strict_types=1);

namespace Mdanter\Ecc\Optimized;

use GMP;
use Mdanter\Ecc\Primitives\PointInterface;

interface OptimizedCurveOpsInterface
{
    public function scalarMult(
        #[\SensitiveParameter]
        GMP $scalar,
        #[\SensitiveParameter]
        PointInterface $point
    ): PointInterface;

    public function scalarMultBase(
        #[\SensitiveParameter]
        GMP $scalar
    ): PointInterface;

    public function addPoints(
        #[\SensitiveParameter]
        PointInterface $a,
        #[\SensitiveParameter]
        PointInterface $b
    ): PointInterface;

    public function doublePoint(
        #[\SensitiveParameter]
        PointInterface $point
    ): PointInterface;

    public function modInverse(
        #[\SensitiveParameter]
        GMP $scalar
    ): GMP;
}
