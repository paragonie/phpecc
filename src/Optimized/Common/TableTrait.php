<?php
declare(strict_types=1);
namespace Mdanter\Ecc\Optimized\Common;

use GMP;
use Mdanter\Ecc\Math\ConstantTimeMath;

/**
 * @method JacobiPoint newPoint()
 * @property ConstantTimeMath ctMath
 */
trait TableTrait
{
    /**
     * @param JacobiPoint[] $table
     * @param int $windowValue
     * @return JacobiPoint
     */
    protected function tableSelect(
        #[\SensitiveParameter]
        array $table,
        #[\SensitiveParameter]
        int $windowValue
    ): JacobiPoint {
        $point = $this->newPoint();
        $shift = (PHP_INT_SIZE << 3) - 1;
        for ($i = 1; $i < 16; ++$i) {
            $cond = (($i ^ $windowValue) - 1) >> $shift;
            $point = $this->selectPoint($cond, $table[$i - 1], $point);
        }
        return $point;
    }

    protected function selectPoint(
        #[\SensitiveParameter]
        int $cond,
        #[\SensitiveParameter]
        JacobiPoint $p,
        #[\SensitiveParameter]
        JacobiPoint $q
    ): JacobiPoint {
        $r = new JacobiPoint();
        $r->x = $this->ctMath->select($cond, $p->x, $q->x);
        $r->y = $this->ctMath->select($cond, $p->y, $q->y);
        $r->z = $this->ctMath->select($cond, $p->z, $q->z);
        return $r;
    }
}
