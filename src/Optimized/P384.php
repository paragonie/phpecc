<?php
declare(strict_types=1);
namespace Mdanter\Ecc\Optimized;

use GMP;
use Mdanter\Ecc\Curves\CurveFactory;
use Mdanter\Ecc\Curves\NamedCurveFp;
use Mdanter\Ecc\Curves\NistCurve;
use Mdanter\Ecc\Math\ConstantTimeMath;
use Mdanter\Ecc\Optimized\Common\{BarretReductionTrait, JacobiPoint, ShortWeierstrassTrait, TableTrait};
use Mdanter\Ecc\Optimized\P384\GeneratorTableTrait;
use Mdanter\Ecc\Primitives\Point;
use Mdanter\Ecc\Primitives\PointInterface;

class P384 implements OptimizedCurveOpsInterface
{
    use BarretReductionTrait;
    use GeneratorTableTrait;
    use ShortWeierstrassTrait;
    use TableTrait;

    /** @var int $N */
    protected static $N = 384;

    /** @var int $size */
    protected static $size = 48;

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
     * @var GMP
     */
    protected $R;

    protected static $genTable;

    /** @var ConstantTimeMath $ctMath */
    protected $ctMath;

    /** @var NamedCurveFp $curveByName */
    protected $curveByName;

    public function __construct()
    {
        $this->ctMath = new ConstantTimeMath();
        $this->curveByName = CurveFactory::getCurveByName(NistCurve::NAME_P384);

        /** @var GMP $p */
        $p       = gmp_init('0xfffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffeffffffff0000000000000000ffffffff', 16);
        $this->p = $p;

        /** @var GMP $order */
        $order   =  gmp_init('39402006196394479212279040100143613805079739270465446667946905279627659399113263569398956308152294913554433653942643');
        $this->order = $order;

        /** @var GMP $b */
        $b       =  gmp_init('0xb3312fa7e23ee7e4988e056be3f82d19181d9c6efe8141120314088f5013875ac656398d8a2ed19d2a85c8edd3ec2aef', 16);
        $this->b = $b;

        /** @var GMP $R */
        $R       = gmp_init('0x1000000000000000000000000000000000000000000000000000000000000000100000000ffffffffffffffff00000001', 16);
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
        for ($i = 0; $i < 48; ++$i) {
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
        for ($i = 0; $i < 48; ++$i) {
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
