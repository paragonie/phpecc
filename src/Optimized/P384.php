<?php
declare(strict_types=1);
namespace Mdanter\Ecc\Optimized;

use GMP;
use Mdanter\Ecc\Curves\CurveFactory;
use Mdanter\Ecc\Curves\NamedCurveFp;
use Mdanter\Ecc\Curves\NistCurve;
use Mdanter\Ecc\Math\ConstantTimeMath;
use Mdanter\Ecc\Optimized\Common\{
    AbstractOptimized,
    BarretReductionTrait,
    ShortWeierstrassTrait,
    TableTrait
};
use Mdanter\Ecc\Optimized\P384\GeneratorTableTrait;
use Mdanter\Ecc\Primitives\PointInterface;

class P384 extends AbstractOptimized implements OptimizedCurveOpsInterface
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

    public function scalarMult(
        #[\SensitiveParameter]
        GMP $scalar,
        #[\SensitiveParameter]
        PointInterface $point
    ): PointInterface {
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
