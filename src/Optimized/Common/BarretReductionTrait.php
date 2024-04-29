<?php
declare(strict_types=1);
namespace Mdanter\Ecc\Optimized\Common;

use GMP;
use Mdanter\Ecc\Math\ConstantTimeMath;

/**
 * @property GMP R
 * @property GMP p
 * @property int N
 */
trait BarretReductionTrait
{
    /**
     * Barret reduction - reduce an integer x mod p
     *
     * @param GMP $product
     * @return GMP
     */
    protected function barrettReduce(
        #[\SensitiveParameter]
        GMP $product
    ): GMP {
        $n2 = static::$N << 1;
        $t2 = (($product * $this->R) >> $n2) * $this->p;
        $r = $product - $t2;
        // Possibly reduced. Let's make sure it's positive
        $ctMath = new ConstantTimeMath();

        $b = ((gmp_sign($r) >> 1)) & 1;
        $rPrime = gmp_add($r,  $this->p);
        $r = $ctMath->select($b, $rPrime, $r);

        // Guaranteed to be reduced after 2 cycles
        for ($i = 0; $i < 2; ++$i) {
            $rPrime = gmp_sub($r, $this->p);
            // $b = 1 if $rPrime > 0, which means subtracting is necessary
            $b = (~(gmp_sign($rPrime) >> 1)) & 1;
            $r = $ctMath->select($b, $rPrime, $r);
        }
        return $r;
    }
}
