<?php
declare(strict_types=1);
namespace Mdanter\Ecc\Optimized;

use GMP;
use Mdanter\Ecc\Curves\CurveFactory;
use Mdanter\Ecc\Curves\NamedCurveFp;
use Mdanter\Ecc\Curves\NistCurve;
use Mdanter\Ecc\Math\ConstantTimeMath;
use Mdanter\Ecc\Optimized\Common\{AbstractOptimized,
    BarretReductionTrait,
    JacobiPoint,
    ShortWeierstrassTrait,
    TableTrait};
use Mdanter\Ecc\Optimized\P256\GeneratorTableTrait;
use Mdanter\Ecc\Primitives\PointInterface;

class P256 extends AbstractOptimized implements OptimizedCurveOpsInterface
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

    /** @var NamedCurveFp $curveByName */
    protected $curveByName;

    public function __construct()
    {
        $this->ctMath = new ConstantTimeMath();
        $this->curveByName = CurveFactory::getCurveByName(NistCurve::NAME_P256);

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

}
