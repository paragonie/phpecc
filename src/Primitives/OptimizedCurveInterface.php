<?php
declare(strict_types=1);
namespace Mdanter\Ecc\Primitives;

use Mdanter\Ecc\Optimized\OptimizedCurveOpsInterface;

/**
 * This refers to an elliptic curve for which we provide an optimized,
 * constant-time optimization for its operations.
 *
 */
interface OptimizedCurveInterface
{
    public function setOptimizedCurveOps(OptimizedCurveOpsInterface $ops): self;
    public function getOptimizedCurveOps(): OptimizedCurveOpsInterface;
}
