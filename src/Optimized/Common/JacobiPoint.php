<?php
declare(strict_types=1);
namespace Mdanter\Ecc\Optimized\Common;

use GMP;
class JacobiPoint
{
    /** @var GMP $x */
    public $x;

    /** @var GMP $y */
    public $y;

    /** @var GMP $z */
    public $z;

    public function __debugInfo()
    {
        return [
            'x' => '0x' . gmp_strval($this->x, 16),
            'y' => '0x' . gmp_strval($this->y, 16),
            'z' => '0x' . gmp_strval($this->z, 16)
        ];
    }
}
