<?php
declare(strict_types=1);
namespace Mdanter\Ecc\Optimized\Common;

use GMP;
use Mdanter\Ecc\Exception\NumberTheoryException;
use Mdanter\Ecc\Math\ConstantTimeMath;
use Mdanter\Ecc\Primitives\CurveFpInterface;
use Mdanter\Ecc\Primitives\Point;
use Mdanter\Ecc\Primitives\PointInterface;

/**
 * @property CurveFpInterface $curveByName
 * @property GMP $order
 * @property GMP $p
 *
 */
abstract class AbstractOptimized
{
    use BarretReductionTrait;

    abstract public function addInternal(
        #[\SensitiveParameter]
        JacobiPoint $p1,
        #[\SensitiveParameter]
        JacobiPoint $p2
    ): JacobiPoint;
    abstract public function doubleInternal(
        #[\SensitiveParameter]
        JacobiPoint $p
    ): JacobiPoint;

    /**
     * @param PointInterface $a
     * @param PointInterface $b
     * @return PointInterface
     */
    public function addPoints(
        #[\SensitiveParameter]
        PointInterface $a,
        #[\SensitiveParameter]
        PointInterface $b
    ): PointInterface {
        $jA = $this->projectPoint($a);
        $jB = $this->projectPoint($b);
        $jC = $this->addInternal($jA, $jB);
        return $this->toBasicPoint($jC);
    }

    /**
     * @param PointInterface $point
     * @return PointInterface
     */
    public function doublePoint(
        #[\SensitiveParameter]
        PointInterface $point
    ): PointInterface {
        $projected = $this->projectPoint($point);
        $doubled = $this->doubleInternal($projected);
        return $this->toBasicPoint($doubled);
    }

    /**
     * Computes the reciprocal of the group order
     *
     * @param GMP $scalar
     * @return GMP
     */
    public function modInverse(
        #[\SensitiveParameter]
        GMP $scalar
    ): GMP {
        // For now, we'll just use ConstantTimeMath.
        return $this->ctMath->inverseMod($scalar, $this->order);
    }

    /**
     * @param PointInterface $point
     * @return JacobiPoint
     */
    public function projectPoint(
        #[\SensitiveParameter]
        PointInterface $point
    ): JacobiPoint {
        $ret = new JacobiPoint();
        $ret->x = clone $point->getX();
        $ret->y = clone $point->getY();
        $ret->z = gmp_init(1, 10);
        return $ret;
    }

    /**
     * Return a new point at infintiy
     *
     * @return JacobiPoint
     */
    public function newPoint(): JacobiPoint
    {
        $ret = new JacobiPoint();
        $ret->x = gmp_init(0, 10);
        $ret->y = gmp_init(1, 10);
        $ret->z = gmp_init(0, 10);
        return $ret;
    }

    public function jacobiToAffine(
        #[\SensitiveParameter]
        JacobiPoint $p
    ): JacobiPoint {
        $q = clone $p;
        $zInv = $this->ctMath->inverseMod($q->z, $this->p);
        $q->x = $this->mulElements($zInv, $q->x);
        $q->y = $this->mulElements($zInv, $q->y);
        $q->z = gmp_init(1, 10);
        return $q;
    }

    /**
     * Convert from a projected point to a basic point used by PHPECC
     *
     * @param JacobiPoint $p
     * @return Point
     */
    public function toBasicPoint(
        #[\SensitiveParameter]
        JacobiPoint $p
    ): Point {
        $q = $this->jacobiToAffine($p);
        return new Point(
            new ConstantTimeMath(),
            $this->curveByName,
            $q->x,
            $q->y,
            clone $this->order
        );
    }

    /**
     * Return (a + b) mod p
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
        return $this->ctMath->select($swap, $rPrime, $r);
    }

    /**
     * Calculate (a x b) mod p, using Barrett Reduction
     *
     * @param GMP $a
     * @param GMP $b
     * @return GMP
     */
    public function mulElements(
        #[\SensitiveParameter]
        GMP $a,
        #[\SensitiveParameter]
        GMP $b
    ): GMP {
        return $this->barrettReduce(gmp_mul($a, $b));
    }

    /**
     * Return (a - b) mod p
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
        $swap = ((gmp_sign($c) >> 1)) & 1;
        $cPrime = $c + $this->p;
        return $this->ctMath->select($swap, $cPrime, $c);
    }

    /**
     * @param JacobiPoint $q
     * @return JacobiPoint[]
     */
    public function makeTable(
        #[\SensitiveParameter]
        JacobiPoint $q
    ): array {
        $table = [clone $q];
        for ($i = 1; $i < 15; $i += 2) {
            $table[$i] = $this->doubleInternal($table[$i >> 1]);
            $table[$i + 1] = $this->addInternal($table[$i], $q);
        }
        return $table;
    }
}
