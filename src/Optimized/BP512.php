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
use Mdanter\Ecc\Optimized\Brainpool\Generator512Trait;
use Mdanter\Ecc\Primitives\PointInterface;

class BP512 extends BrainpoolOptimized implements OptimizedCurveOpsInterface
{
    use BarretReductionTrait;
    use Generator512Trait;
    use PrimeOrderTrait;
    use TableTrait;

    /** @var int $N */
    protected static $N = 512;

    /** @var int $size */
    protected static $size = 64;

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
        $gen = CurveFactory::getGeneratorByName(BrainpoolCurve::NAME_P512R1);
        $this->curveByName = $gen->getCurve();
        $this->p = clone $this->curveByName->getPrime();
        $this->order = clone $gen->getOrder();
        $this->a = clone $this->curveByName->getA();

        // These are derived _once_
        // $b = $this->curveByName->getB();
        // $b3 = ($b * 3) % $this->p;
        /** @var GMP $b3 */
        $b3      = gmp_init('0x0f0da4791cb300d57ff4448655fe1c082d3f222f6ac3034dcc6cbd560d003e84068abc2d1b7e9ca5b9281d35ad753a50a03ef2f6eeadeb124f72d7d4280a9c76', 16);
        $this->b3 = $b3;

        /** @var GMP $R */
        // $R = gmp_pow(2, 1024) / $this->p;
        $R       = gmp_init('0x17f8d7f4ed6daeb8a15d5ea2f03461e1e8373af60cc44ef09666ad8f2f5bf92f542ff2b38823152c5e47d93034e73ea8c71d621c4603556d117e2cf84e911e8d9', 16);
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
        for ($i = 0; $i < 64; ++$i) {
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
        for ($i = 0; $i < 64; ++$i) {
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
