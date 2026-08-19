<?php
declare(strict_types=1);

namespace Mdanter\Ecc\Random;

use Exception;
use GMP;
use InvalidArgumentException;
use Mdanter\Ecc\Math\GmpMathInterface;
use Mdanter\Ecc\Util\NumberSize;

class RandomNumberGenerator implements RandomNumberGeneratorInterface
{
    /**
     * @var GmpMathInterface
     */
    private $adapter;

    /** @var callable */
    private $randomBytes;

    /**
     * RandomNumberGenerator constructor.
     * @param GmpMathInterface $adapter
     * @param ?callable $randomBytes
     */
    public function __construct(GmpMathInterface $adapter, ?callable $randomBytes = null)
    {
        $this->adapter = $adapter;
        $this->randomBytes = $randomBytes ?? 'random_bytes';
    }

    /**
     * @param GMP $max
     * @return GMP
     * @throws Exception
     */
    public function generate(GMP $max): GMP
    {
        $zero = gmp_init(0, 10);
        if ($this->adapter->cmp($max, gmp_init(2, 10)) < 0) {
            throw new InvalidArgumentException('Upper boundary must be greater than one');
        }

        $numBits = NumberSize::bnNumBits($this->adapter, $max);
        $numBytes = (int) ceil($numBits / 8);
        $mask = gmp_sub(gmp_init(2) ** $numBits, 1);

        do {
            $bytes = ($this->randomBytes)($numBytes);
            $integer = gmp_and($this->adapter->stringToInt($bytes), $mask);
        } while ($this->adapter->cmp($integer, $zero) <= 0 || $this->adapter->cmp($integer, $max) >= 0);

        return $integer;
    }
}
