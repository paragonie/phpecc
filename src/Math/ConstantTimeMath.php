<?php
declare(strict_types=1);

namespace Mdanter\Ecc\Math;

use GMP;
use Mdanter\Ecc\Exception\NumberTheoryException;
use Mdanter\Ecc\Util\BinaryString;
use function gmp_init;
use function gmp_sign;

/**
 * Class ConstantTimeMath
 *
 * This class extends GmpMath to replace some GMP functions with algorithms
 * guaranteed to be constant-time.
 *
 * @package Mdanter\Ecc\Math
 */
class ConstantTimeMath extends GmpMath
{

    /**
     * Compare signs. Returns [$gt, $eq].
     *
     * Sets $gt to 1 if $first > $other.
     * Sets $eq to1 if $first === $other.
     *
     * See {@link cmp()} for usage.
     *
     * | first | other | gt | eq |
     * |-------|-------|----|----|
     * |    -1 |    -1 |  0 |  1 |
     * |    -1 |     0 |  0 |  0 |
     * |    -1 |     1 |  0 |  0 |
     * |     0 |    -1 |  1 |  0 |
     * |     0 |     0 |  0 |  1 |
     * |     0 |     1 |  1 |  0 |
     * |     1 |    -1 |  1 |  0 |
     * |     1 |     0 |  1 |  0 |
     * |     1 |     1 |  0 |  1 |
     *
     * @param int $first_sign
     * @param int $other_sign
     * @return int[]
     */
    public function compareSigns(
        #[\SensitiveParameter]
        int $first_sign,
        #[\SensitiveParameter]
        int $other_sign
    ): array {
        // Coerce to positive (-1, 0, 1) -> (0, 1, 2)
        ++$first_sign;
        ++$other_sign;
        $gt = (($other_sign - $first_sign) >> 2) & 1;
        $eq = ((($first_sign ^ $other_sign) - 1) >> 2) & 1;
        return [$gt, $eq];
    }

    /**
     * Compare two GMP objects, without timing leaks.
     *
     * @param GMP $first
     * @param GMP $other
     * @return int -1 if $first < $other
     *              0 if $first === $other
     *              1 if $first > $other
     */
    public function cmp(
        #[\SensitiveParameter]
        GMP $first,
        #[\SensitiveParameter]
        GMP $other
    ): int {
        /**
         * @var string $left
         * @var string $right
         * @var int $length
         */
        list($left, $right, $length) = $this->normalizeLengths($first, $other);

        $first_sign = gmp_sign($first);
        $other_sign = gmp_sign($other);
        list($gt, $eq) = $this->compareSigns($first_sign, $other_sign);

        for ($i = 0; $i < $length; ++$i) {
            $gt |= (($this->ord($right[$i]) - $this->ord($left[$i])) >> 8) & $eq;
            $eq &= (($this->ord($right[$i]) ^ $this->ord($left[$i])) - 1) >> 8;
        }
        return ($gt + $gt + $eq) - 1;
    }

    /**
     * Returns 1 if two numbers are equal. Returns 0 otherwise.
     *
     * @param GMP $first
     * @param GMP $other
     * @return int
     */
    public function equalsReturnInt(
        #[\SensitiveParameter]
        GMP $first,
        #[\SensitiveParameter]
        GMP $other
    ): int {
        $compared = $this->cmp($first, $other);
        $gt = $compared & 1;
        $lt = ($compared >> 1) & 1;
        return (~$compared & ~$gt & ~$lt) & 1;
    }

    /**
     * {@inheritDoc}
     * @see GmpMathInterface::inverseMod()
     */
    public function inverseMod(
        #[\SensitiveParameter]
        GMP $a,
        #[\SensitiveParameter]
        GMP $m
    ): GMP {
        list($x, $y) = $this->binaryGcd($a, $m);
        /** @var GMP $one */
        $one = gmp_init(1, 10);
        if (!$this->equals($y, $one)) {
            throw new NumberTheoryException('No inverse exists for these two numbers');
        }

        return $x;
    }

    /**
     * Iterate over the trailing zeroes in $w (which is either $u or $v) in the Binary GCD.
     *
     * @param GMP $w
     * @param GMP $r
     * @param GMP $s
     * @param GMP $x
     * @param GMP $y
     * @return GMP[]
     */
    protected function binaryGcdTrailingZeroes(
        #[\SensitiveParameter]
        GMP $w,
        #[\SensitiveParameter]
        GMP $r,
        #[\SensitiveParameter]
        GMP $s,
        #[\SensitiveParameter]
        GMP $x,
        #[\SensitiveParameter]
        GMP $y
    ): array {
        for ($bits = $this->trailingZeroes($w); $bits > 0; --$bits) {
            $w = $this->rightShift($w, 1);
            $swap = (~$this->lsb($r) & ~$this->lsb($s)) & 1;

            $r = $this->select($swap, $r, $this->add($r, $y));
            $r = $this->rightShift($r, 1);

            $s = $this->select($swap, $s, $this->sub($s, $x));
            $s = $this->rightShift($s, 1);
        }
        return [$w, $r, $s, $x, $y];
    }

    /**
     * Stein's Algorithm (Binary GCD)
     *
     * Based on algorithm 14.61 from the Handbook of Applied Cryptography
     *
     * @param GMP $X
     * @param GMP $Y
     * @return GMP[] ($gcd, $inverse)
     */
    public function binaryGcd(
        #[\SensitiveParameter]
        GMP $X,
        #[\SensitiveParameter]
        GMP $Y
    ): array {
        // Don't mutate the input parameters
        $x = clone $X;
        $y = clone $Y;
        $g = \min($this->trailingZeroes($x), $this->trailingZeroes($y));
        $x = $this->rightShift($x, $g);
        $x = $this->rightShift($x, $g);
        $u = clone $x;
        $v = clone $y;

        /** @var GMP $zero */
        $zero = gmp_init(0, 10);
        /** @var GMP $a */
        $a = gmp_init(1, 10);
        /** @var GMP $b */
        $b = gmp_init(0, 10);
        /** @var GMP $c */
        $c = gmp_init(0, 10);
        /** @var GMP $d */
        $d = gmp_init(1, 10);

        do {
            [$u, $a, $b, $x, $y] = $this->binaryGcdTrailingZeroes($u, $a, $b, $x, $y);
            [$v, $c, $d, $x, $y] = $this->binaryGcdTrailingZeroes($v, $c, $d, $x, $y);

            $cmp = $this->cmp($u, $v);
            /*
             | cmp(u, v) | swap |
             +---------------+------+
             | -1            |    0 |
             |  0            |    1 |
             |  1            |    1 |
             */
            // if ($u >= $v):
            $swap = 1 - (($cmp >> 1) & 1);

            // swap = (1 - (compare_alt(u, v)[0] >>> 31));
            $u = $this->select($swap, $this->sub($u, $v), $u);
            $a = $this->select($swap, $this->sub($a, $c), $a);
            $b = $this->select($swap, $this->sub($b, $d), $b);

            $swap = 1 - $swap;
            // else:
            $v = $this->select($swap, $this->sub($v, $u), $v);
            $c = $this->select($swap, $this->sub($c, $a), $c);
            $d = $this->select($swap, $this->sub($d, $b), $d);
        } while (!$this->equals($u, $zero));

        return [$c, $this->leftShift($v, $g)];
    }

    /**
     * Constant-time conditional select.
     *
     * returns ($bit === 1 ? $a : $b)
     *
     * @param int $bit
     * @param GMP $a
     * @param GMP $b
     * @return GMP
     */
    public function select(
        #[\SensitiveParameter]
        int $bit,
        #[\SensitiveParameter]
        GMP $a,
        #[\SensitiveParameter]
        GMP $b
    ): GMP {
        // Handle the sign bits (for multiplying later)
        $a_sign = gmp_sign($a);
        $b_sign = gmp_sign($b);
        /* if bit: sign = a_sign
         * else: sign = b_sign
         */
        $sign = $b_sign ^ (($a_sign ^ $b_sign) & -$bit);

        // ($mask = $bit ? 0xff : 0x00) without branches
        $mask = -($bit & 1) & 0xff;

        // Work with the positive hex values:
        /**
         * @var string $left
         * @var string $right
         * @var int $length
         */
        list($left, $right, $length) = $this->normalizeLengths($a, $b);

        $out = [];
        for ($i = 0; $i < $length; ++$i) {
            $l = $this->ord($left[$i]);
            $r = $this->ord($right[$i]);
            $out[$i] = $this->chr($r ^ (($l ^ $r) & $mask));
        }
        /** @var GMP $_a */
        $_a = gmp_init(bin2hex(implode('', $out)), 16);
        /** @var GMP $_b */
        $_b = gmp_init($sign, 10);
        // Re-multiply the sign bit:
        return $this->mul($_a, $_b);
    }

    /**
     * How many trailing zero bits are in this number?
     *
     * We can't just use gmp_scan1() for this, because its runtime
     * is variable based on the number of trailing 0 bits.
     *
     * @param GMP $num
     * @return int
     *
     * @psalm-suppress UnusedVariable (False positive; https://github.com/vimeo/psalm/issues/6145)
     */
    public function trailingZeroes(
        #[\SensitiveParameter]
        GMP $num
    ): int {
        $trailing = 0;
        $b = 0;
        $found = 0;
        $strval = gmp_strval($num, 2);
        for ($i = BinaryString::length($strval) - 1; $i >= 0; --$i) {
            $bit = $this->ord($strval[$i]) & 1;
            $trailing = ((-$bit & $b) & ~$found) ^ ($trailing & $found);
            $found |= -$bit; // -1 if found, 0 if not
            ++$b;
        }
        return $trailing;
    }

    /**
     * Get the least significant bit of $num.
     *
     * @param GMP $num
     * @return int
     */
    public function lsb(
        #[\SensitiveParameter]
        GMP $num
    ): int {
        return gmp_intval($num) & 1;
    }

    /**
     * Get an unsigned integer for the character in the provided string at index 0.
     *
     * @param string $chr
     * @return int
     */
    public function ord(
        #[\SensitiveParameter]
        string $chr
    ): int {
        return (int) unpack('C', $chr)[1];
    }

    /**
     * Turn an integer in the range [0, 255] into a string character.
     * Unlike PHP's chr(), this doesn't have a cache-timing leak.
     *
     * @param int $c
     * @return string
     */
    public function chr(
        #[\SensitiveParameter]
        int $c
    ): string {
        return pack('C', $c);
    }

    /**
     * Normalize the lengths of two input numbers.
     *
     * @param GMP $a
     * @param GMP $b
     * @return array<string|int, string|int>
     */
    public function normalizeLengths(
        #[\SensitiveParameter]
        GMP $a,
        #[\SensitiveParameter]
        GMP $b
    ): array {
        $a_hex = gmp_strval(gmp_abs($a), 16);
        $b_hex = gmp_strval(gmp_abs($b), 16);
        $length = max(BinaryString::length($a_hex), BinaryString::length($b_hex));
        $length += $length & 1;

        $left = hex2bin(str_pad($a_hex, $length, '0', STR_PAD_LEFT));
        $right = hex2bin(str_pad($b_hex, $length, '0', STR_PAD_LEFT));
        $length >>= 1;
        return [$left, $right, $length];
    }
}
