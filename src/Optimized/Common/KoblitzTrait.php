<?php
declare(strict_types=1);
namespace Mdanter\Ecc\Optimized\Common;

use GMP;

/**
 * Point addition and point doubling for short Weierstrass curves of form
 * y^2 = x^3 + b
 *
 * That is to say, a = 0
 *
 * @property GMP $b3
 * @property GMP $p
 *
 * @method GMP addElements(GMP $a, GMP $b, bool $reduce = true)
 * @method GMP mulElements(GMP $a, GMP $b)
 * @method GMP subElements(GMP $a, GMP $b)
 */
trait KoblitzTrait
{
    /**
     * https://eprint.iacr.org/2015/1060
     * Algorithm 4
     *
     * @param JacobiPoint $p1
     * @param JacobiPoint $p2
     * @return JacobiPoint
     */
    public function addInternal(
        #[\SensitiveParameter]
        JacobiPoint $p1,
        #[\SensitiveParameter]
        JacobiPoint $p2
    ): JacobiPoint {
        $X1 = $p1->x;
        $Y1 = $p1->y;
        $Z1 = $p1->z;
        $X2 = $p2->x;
        $Y2 = $p2->y;
        $Z2 = $p2->z;

        $t0 = $this->mulElements($X1, $X2);       // t0 := X1 * X2
        $t1 = $this->mulElements($Y1, $Y2);       // t1 := Y1 * Y2
        $t2 = $this->mulElements($Z1, $Z2);       // t2 := Z1 * Z2
        $t3 = $this->addElements($X1, $Y1);       // t3 := X1 + Y1
        $t4 = $this->addElements($X2, $Y2);       // t4 := X2 + Y2
        $t3 = $this->mulElements($t3, $t4);       // t3 := t3 * t4
        $t4 = $this->addElements($t0, $t1);       // t4 := t0 + t1
        $t3 = $this->subElements($t3, $t4);       // t3 := t3 - t4
        $t4 = $this->addElements($Y1, $Z1);       // t4 := Y1 + Z1
        $X3 = $this->addElements($Y2, $Z2);       // X3 := Y2 + Z2
        $t4 = $this->mulElements($t4, $X3);       // t4 := t4 * X3
        $X3 = $this->addElements($t1, $t2);       // X3 := t1 + t2
        $t4 = $this->subElements($t4, $X3);       // t4 := t4 - X3
        $X3 = $this->addElements($X1, $Z1);       // X3 := X1 + Z1
        $Y3 = $this->addElements($X2, $Z2);       // Y3 := X2 + Z2
        $X3 = $this->mulElements($X3, $Y3);       // X3 := X3 * Y3
        $Y3 = $this->addElements($t0, $t2);       // Y3 := t0 + t2
        $Y3 = $this->subElements($X3, $Y3);       // Y3 := X3 - Y3
        $X3 = $this->addElements($t0, $t0);       // X3 := t0 + t0
        $t0 = $this->addElements($X3, $t0);       // t0 := X3 + t0
        $t2 = $this->mulElements($this->b3, $t2); // t2 := b3 * t2
        $Z3 = $this->addElements($t1, $t2);       // Z3 := t1 + t2
        $t1 = $this->subElements($t1, $t2);       // t1 := t1 - t2
        $Y3 = $this->mulElements($this->b3, $Y3); // Y3 := b3 * Y3
        $X3 = $this->mulElements($t4, $Y3);       // X3 := t4 * Y3
        $t2 = $this->mulElements($t3, $t1);       // t2 := t3 * t1
        $X3 = $this->subElements($t2, $X3);       // X3 := t2 - X3
        $Y3 = $this->mulElements($Y3, $t0);       // Y3 := Y3 * t0
        $t1 = $this->mulElements($t1, $Z3);       // t1 := t1 * Z3
        $Y3 = $this->addElements($t1, $Y3);       // Y3 := t1 + Y3
        $t0 = $this->mulElements($t0, $t3);       // t0 := t0 * t3
        $Z3 = $this->mulElements($Z3, $t4);       // Z3 := Z3 * t4
        $Z3 = $this->addElements($Z3, $t0);       // Z3 := Z3 + t0

        // Return (X3, Y3, Z3)
        return JacobiPoint::init($X3, $Y3, $Z3);
    }


    /**
     * https://eprint.iacr.org/2015/1060
     * Algorithm 6
     *
     * @param JacobiPoint $p
     * @return JacobiPoint
     */
    public function doubleInternal(
        #[\SensitiveParameter]
        JacobiPoint $p
    ): JacobiPoint {
        $X = $p->x;
        $Y = $p->y;
        $Z = $p->z;

        $t0 = $this->mulElements($Y, $Y);         // t0 := Y^2
        $Z3 = $this->addElements($t0, $t0);       // Z3 := t0 + t0
        $Z3 = $this->addElements($Z3, $Z3);       // Z3 := Z3 + Z3
        $Z3 = $this->addElements($Z3, $Z3);       // Z3 := Z3 + Z3
        $t1 = $this->mulElements($Y, $Z);         // t1 := Y * Z
        $t2 = $this->mulElements($Z, $Z);         // t2 := Z^2
        $t2 = $this->mulElements($this->b3, $t2); // t2 := b3 * t2
        $X3 = $this->mulElements($t2, $Z3);       // X3 := t2 * Z3
        $Y3 = $this->addElements($t0, $t2);       // Y3 := t0 + t2
        $Z3 = $this->mulElements($t1, $Z3);       // Z3 := t1 * Z3
        $t1 = $this->addElements($t2, $t2);       // t1 := t2 + t2
        $t2 = $this->addElements($t1, $t2);       // t2 := t1 + t2
        $t0 = $this->subElements($t0, $t2);       // t0 := t0 - t2
        $Y3 = $this->mulElements($t0, $Y3);       // Y3 := t0 * Y3
        $Y3 = $this->addElements($X3, $Y3);       // Y3 := X3 + Y3
        $t1 = $this->mulElements($X, $Y);         // t1 := X * Y
        $X3 = $this->mulElements($t0, $t1);       // X3 := t0 * t1
        $X3 = $this->addElements($X3, $X3);       // X3 := X3 + X3
        
        // Return (X3, Y3, Z3)
        return JacobiPoint::init($X3, $Y3, $Z3);
    }
}
