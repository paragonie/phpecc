<?php
declare(strict_types=1);

namespace Mdanter\Ecc\Random;
use GMP;

interface RandomNumberGeneratorInterface
{
    /**
     * Generate a random number in [1, max - 1].
     * @param GMP $max - Exclusive upper boundary
     * @return GMP
     */
    public function generate(GMP $max): GMP;
}
