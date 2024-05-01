<?php
declare(strict_types=1);
namespace Mdanter\Ecc\Optimized\Common;

use GMP;

abstract class BrainpoolOptimized extends AbstractOptimized
{
    /**
     * This is slightly slower than the normal Weierstrass element addition due to the primes
     * used by Brainpool curves requiring an additional conditional subtraction
     *
     * @param GMP $a
     * @param GMP $b
     * @param bool $reduce
     * @return GMP
     */
    public function addElements(
        #[\SensitiveParameter]
        GMP $a,
        #[\SensitiveParameter]
        GMP $b,
        #[\SensitiveParameter]
        bool $reduce = true
    ): GMP {
        /** @var GMP $r */
        $r = gmp_add($a, $b);
        if (!$reduce) {
            return $r;
        }

        // For some Brainpool curves, we may need to do this twice to ensure r is in [0, p)
        for ($i = 0; $i < 2; ++$i) {
            $cmp = $this->ctMath->cmp($r, $this->p);
            // $cmp = < -1,  0,  1 >
            //          lt, eq, gt
            //
            // ($cmp - 1) = < -2, -1,  0 >
            //                lt, eq, gt
            //
            // (($cmp - 1) >> 1) & 1 = <  1,  1,  0 >
            //                           lt, eq, gt
            //
            // $swap = < 0,  0,  1 >
            //           lt, eq, gt
            $swap = (~(($cmp - 1) >> 1)) & 1;
            $rPrime = $r - $this->p;
            $r = $this->ctMath->select($swap, $rPrime, $r);
        }
        return $r;
    }


    /**
     * Return (a - b) mod p
     *
     * This is slightly slower than the normal Weierstrass element subtraction due to the primes
     * used by Brainpool curves requiring an additional conditional subtraction
     *
     * @param GMP $a
     * @param GMP $b
     * @return GMP
     */
    public function subElements(
        #[\SensitiveParameter]
        GMP $a,
        #[\SensitiveParameter]
        GMP $b
    ): GMP {
        $c = gmp_sub($a,  $b);

        for ($i = 0; $i < 2; ++$i) {
            $swap = ((gmp_sign($c) >> 1)) & 1;
            $cPrime = $c + $this->p;
            $c = $this->ctMath->select($swap, $cPrime, $c);
        }
        return $c;
    }
}
