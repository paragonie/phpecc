<?php
declare(strict_types=1);
namespace Mdanter\Ecc\Optimized;

use GMP;
use Mdanter\Ecc\Curves\{
    BrainpoolCurve,
    CurveFactory,
    NamedCurveFp
};
use Mdanter\Ecc\Math\ConstantTimeMath;
use Mdanter\Ecc\Optimized\Common\{
    BarretReductionTrait,
    BrainpoolOptimized,
    JacobiPoint,
    PrimeOrderTrait,
    TableTrait
};
use Mdanter\Ecc\Optimized\Brainpool\Generator384Trait;
use Mdanter\Ecc\Primitives\PointInterface;

class BP384 extends BrainpoolOptimized implements OptimizedCurveOpsInterface
{
    use BarretReductionTrait;
    use Generator384Trait;
    use PrimeOrderTrait;
    use TableTrait;

    /** @var int $N */
    protected static $N = 384;

    /** @var int $size */
    protected static $size = 48;

    /**
     * @var GMP $a
     */
    protected $a;

    /**
     * @var GMP $b3
     */
    protected $b3;

    /**
     * @var GMP $p
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

    /** @var NamedCurveFp $curveByName */
    protected $curveByName;

    public function __construct()
    {
        $this->ctMath = new ConstantTimeMath();
        $gen = CurveFactory::getGeneratorByName(BrainpoolCurve::NAME_P384R1);
        $this->curveByName = $gen->getCurve();
        $this->p = clone $this->curveByName->getPrime();
        $this->order = clone $gen->getOrder();
        $this->a = clone $this->curveByName->getA();

        // These are derived _once_
        // $b = $this->curveByName->getB();
        // $b3 = ($b * 3) % $this->p;
        /** @var GMP $b3 */
        $b3      = gmp_init('0x0dfa5797686a7873a1ad1ffc44d0cd748f2679a3179677f28b982befbcc22880761cab07c1935cbcb02693c4eef0e433', 16);
        $this->b3 = $b3;

        /** @var GMP $R */
        // $R = gmp_pow(2, 768) / $this->p;
        $R       = gmp_init('0x1d1b575b16d8ec6b8ff25adfd3cc6fa65dda2c449cae56ede9ed590cef1c4d7219047bce07a71566f10a03bf684a26716', 16);
        $this->R = $R;

        if (empty(self::$genTable)) {
            self::$genTable = $this->generatorTable();
        }
    }

    public function scalarMult(
        #[\SensitiveParameter]
        GMP $scalar,
        #[\SensitiveParameter]
        PointInterface $point
    ): PointInterface {
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

    public function scalarMultBase(
        #[\SensitiveParameter]
        GMP $scalar
    ): PointInterface {
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
}
