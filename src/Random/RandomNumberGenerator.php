<?php
declare(strict_types=1);

namespace Mdanter\Ecc\Random;

use Exception;
use GMP;
use Mdanter\Ecc\Math\GmpMathInterface;
use Mdanter\Ecc\Util\NumberSize;

class RandomNumberGenerator implements RandomNumberGeneratorInterface
{
    /**
     * @var GmpMathInterface
     */
    private $adapter;

    /**
     * RandomNumberGenerator constructor.
     * @param GmpMathInterface $adapter
     */
    public function __construct(GmpMathInterface $adapter)
    {
        $this->adapter = $adapter;
    }

    /**
     * @param GMP $max
     * @return GMP
     * @throws Exception
     */
    public function generate(GMP $max): GMP
    {
        $numBits = NumberSize::bnNumBits($this->adapter, $max);
        $numBytes = (int) ceil($numBits / 8);
        // Generate an integer of size >= $numBits
        $bytes = random_bytes($numBytes);
        $value = $this->adapter->stringToInt($bytes);

        /** @var GMP $mask */
        $mask = gmp_sub(gmp_init(2) ** $numBits, 1);
        /** @var GMP $integer */
        $integer = gmp_and($value, $mask);

        return $integer;
    }
}
