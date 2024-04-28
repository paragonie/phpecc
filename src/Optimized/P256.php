<?php
declare(strict_types=1);
namespace Mdanter\Ecc\Optimized;

use GMP;
use Mdanter\Ecc\Curves\CurveFactory;
use Mdanter\Ecc\Curves\NistCurve;
use Mdanter\Ecc\Math\ConstantTimeMath;
use Mdanter\Ecc\Optimized\Common\{BarretReductionTrait, JacobiPoint, ShortWeierstrassTrait, TableTrait};
use Mdanter\Ecc\Optimized\P256\GeneratorTableTrait;
use Mdanter\Ecc\Primitives\Point;
use Mdanter\Ecc\Primitives\PointInterface;

class P256 implements OptimizedCurveOpsInterface
{
    use BarretReductionTrait;
    use GeneratorTableTrait;
    use ShortWeierstrassTrait;
    use TableTrait;

    /** @var int $N */
    protected static $N = 256;

    /** @var int $size */
    protected static $size = 32;

    /**
     * @var GMP $b
     */
    protected $b;

    /**
     * @var GMP $b
     */
    protected $p;

    /**
     * @var GMP $order
     */
    protected $order;

    /**
     * @var JacobiPoint[][]
     */
    protected static $genTable = [];

    /**
     * @var GMP
     */
    protected $R;

    /** @var ConstantTimeMath $ctMath */
    protected $ctMath;

    public function __construct()
    {
        $this->ctMath = new ConstantTimeMath();

        /** @var GMP $p */
        $p       = gmp_init('0xffffffff00000001000000000000000000000000ffffffffffffffffffffffff', 16);
        $this->p = $p;

        /** @var GMP $order */
        $order   =  gmp_init('115792089210356248762697446949407573529996955224135760342422259061068512044369', 10);
        $this->order = $order;

        /** @var GMP $b */
        $b       =  gmp_init('0x5ac635d8aa3a93e7b3ebbd55769886bc651d06b0cc53b0f63bce3c3e27d2604b', 16);
        $this->b = $b;

        /** @var GMP $R */
        $R       = gmp_init('0x100000000fffffffffffffffefffffffefffffffeffffffff0000000000000003', 16);
        $this->R = $R;

        if (empty(self::$genTable)) {
            self::$genTable = $this->generatorTable();
        }
    }

    public function scalarMult(GMP $scalar, PointInterface $point): PointInterface
    {
        // Initialize a 256-bit table
        $q = $this->projectPoint($point);
        $table = $this->makeTable($q);
        [$bytes, ] = $this->ctMath->normalizeLengths($scalar, $this->p);

        $p = $this->newPoint();
        for ($i = 0; $i < 32; ++$i) {
            // chr to int without side-channels:
            $byte = unpack('C', $bytes[$i])[1];
            if ($i != 0) {
                $p = $this->doubleInternal($p);
                $p = $this->doubleInternal($p);
                $p = $this->doubleInternal($p);
                $p = $this->doubleInternal($p);
            }
            $windowValue = $byte >> 4;
            $t = $this->tableSelect($table, $windowValue);
            $p = $this->addInternal($p, $t);

            $p = $this->doubleInternal($p);
            $p = $this->doubleInternal($p);
            $p = $this->doubleInternal($p);
            $p = $this->doubleInternal($p);

            $windowValue = $byte & 0b1111;
            $t = $this->tableSelect($table, $windowValue);
            $p = $this->addInternal($p, $t);
        }
        return $this->toBasicPoint($p);
    }

    public function scalarMultBase(GMP $scalar): PointInterface
    {
        if (empty(self::$genTable)) {
            self::$genTable = $this->generatorTable();
        }
        $tables = array_values(self::$genTable);
        [$bytes, ] = $this->ctMath->normalizeLengths($scalar, $this->p);

        $p = $this->newPoint();
        $tableIndex = count(self::$genTable) - 1;
        for ($i = 0; $i < 32; ++$i) {
            // chr to int without side-channels:
            $byte = unpack('C', $bytes[$i])[1];
            $windowValue = $byte >> 4;
            $t = $this->tableSelect($tables[$tableIndex], $windowValue);
            $p = $this->addInternal($p, $t);
            $tableIndex--;

            $windowValue = $byte & 0b1111;
            $t = $this->tableSelect($tables[$tableIndex], $windowValue);
            $p = $this->addInternal($p, $t);
            $tableIndex--;
        }
        return $this->toBasicPoint($p);
    }

    /**
     * @param PointInterface $a
     * @param PointInterface $b
     * @return PointInterface
     */
    public function addPoints(PointInterface $a, PointInterface $b): PointInterface
    {
        $jA = $this->projectPoint($a);
        $jB = $this->projectPoint($b);
        $jC = $this->addInternal($jA, $jB);
        return $this->toBasicPoint($jC);
    }

    /**
     * @param PointInterface $point
     * @return PointInterface
     */
    public function doublePoint(PointInterface $point): PointInterface
    {
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

    public function modInverse(GMP $scalar): GMP
    {
        // For now, we'll just use ConstantTimeMath.
        return $this->ctMath->inverseMod($scalar, $this->order);
    }

    /**
     * @param PointInterface $point
     * @return JacobiPoint
     */
    public function projectPoint(PointInterface $point): JacobiPoint
    {
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

    public function jacobiToAffine(JacobiPoint $p): JacobiPoint
    {
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
    public function toBasicPoint(JacobiPoint $p): Point
    {
        $q = $this->jacobiToAffine($p);
        return new Point(
            new ConstantTimeMath(),
            CurveFactory::getCurveByName(NistCurve::NAME_P256),
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
    public function addElements(GMP $a, GMP $b, bool $reduce = true): GMP
    {
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
    public function mulElements(GMP $a, GMP $b): GMP
    {
        return $this->barrettReduce(gmp_mul($a, $b));
    }

    /**
     * Return (a - b) mod p
     *
     * @param GMP $a
     * @param GMP $b
     * @return GMP
     */
    public function subElements(GMP $a, GMP $b): GMP
    {
        $c = gmp_sub($a,  $b);
        $swap = ((gmp_sign($c) >> 1)) & 1;
        $cPrime = $c + $this->p;
        return $this->ctMath->select($swap, $cPrime, $c);
    }

    /**
     * @return JacobiPoint[][]
     */
    private function runtimeGeneratorTable(): array
    {
        $table = [];
        $base = new JacobiPoint();
        /** @var GMP $x */
        $x = gmp_init('0x6b17d1f2e12c4247f8bce6e563a440f277037d812deb33a0f4a13945d898c296', 16);
        /** @var GMP $y */
        $y = gmp_init('0x4fe342e2fe1a7f9b8ee7eb4a7c0f9e162bce33576b315ececbb6406837bf51f5', 16);
        $base->x = $x;
        $base->y = $y;
        $base->z = gmp_init(1, 10);

        for ($i = 0; $i < 64; ++$i) {
            $table[$i][0] = clone $base;
            for ($j = 1; $j < 15; ++$j) {
                $table[$i][$j] = $this->addInternal($base, $table[$i][$j - 1]);
            }
            for ($j = 0; $j < 4; ++$j) {
                $base = $this->doubleInternal($base);
            }
        }
        return $table;
    }

    /**
     * @param JacobiPoint $q
     * @return JacobiPoint[]
     */
    public function makeTable(JacobiPoint $q): array
    {
        $table = [clone $q];
        for ($i = 1; $i < 15; $i += 2) {
            $table[$i] = $this->doubleInternal($table[$i >> 1]);
            $table[$i + 1] = $this->addInternal($table[$i], $q);
        }
        return $table;
    }
}
