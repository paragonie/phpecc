<?php
declare(strict_types=1);
namespace Mdanter\Ecc\Curves;

use Mdanter\Ecc\Optimized\OptimizedCurveOpsInterface;
use Mdanter\Ecc\Primitives\OptimizedCurveInterface;

class OptimizedCurveFp extends NamedCurveFp implements OptimizedCurveInterface
{
    /**
     * @var ?OptimizedCurveOpsInterface $optimizedOps
     */
    private $optimizedOps;

    public function setOptimizedCurveOps(OptimizedCurveOpsInterface $ops): OptimizedCurveInterface
    {
        $this->optimizedOps = $ops;
        return $this;
    }

    public function getOptimizedCurveOps(): OptimizedCurveOpsInterface
    {
        return $this->optimizedOps;
    }
}
