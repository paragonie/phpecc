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
use Mdanter\Ecc\Optimized\Brainpool\Generator256Trait;
use Mdanter\Ecc\Primitives\PointInterface;

class BP256 extends BrainpoolOptimized implements OptimizedCurveOpsInterface
{
    use BarretReductionTrait;
    use Generator256Trait;
    use PrimeOrderTrait;
    use TableTrait;

    /** @var int $N */
    protected static $N = 256;

    /** @var int $size */
    protected static $size = 32;

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
        $gen = CurveFactory::getGeneratorByName(BrainpoolCurve::NAME_P256R1);
        $this->curveByName = $gen->getCurve();
        $this->p = clone $this->curveByName->getPrime();
        $this->order = clone $gen->getOrder();
        $this->a = $this->curveByName->getA();

        // These are derived _once_
        // $b = $this->curveByName->getB();
        // $b3 = ($b * 3) % $this->p;
        /** @var GMP $b3 */
        $b3      = gmp_init('0x74951546bbdee1ced992218d3386763ec08c427c16e7a56b4366944afea41722', 16);
        $this->b3 = $b3;

        /** @var GMP $R */
        // $R = gmp_pow(2, 512) / $this->p;
        $R       = gmp_init('0x1818c1131a1c55b7ebb73aba8322a7bf29b4f54a0ff6a2fa9b62ae6301180dd0c', 16);
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
