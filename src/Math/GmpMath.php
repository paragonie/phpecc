<?php
declare(strict_types=1);

namespace Mdanter\Ecc\Math;

use GMP;
use Mdanter\Ecc\Util\BinaryString;
use Mdanter\Ecc\Util\NumberSize;

class GmpMath implements GmpMathInterface
{
    /**
     * {@inheritDoc}
     * @see GmpMathInterface::cmp()
     */
    public function cmp(GMP $first, GMP $other): int
    {
        return gmp_cmp($first, $other);
    }

    /**
     * @param GMP $first
     * @param GMP $other
     * @return bool
     */
    public function equals(GMP $first, GMP $other): bool
    {
        return gmp_cmp($first, $other) === 0;
    }

    /**
     * {@inheritDoc}
     * @see GmpMathInterface::mod()
     */
    public function mod(GMP $number, GMP $modulus): GMP
    {
        /** @var GMP $out */
        $out = gmp_mod($number, $modulus);
        return $out;
    }

    /**
     * {@inheritDoc}
     * @see GmpMathInterface::add()
     */
    public function add(GMP $augend, GMP $addend): GMP
    {
        /** @var GMP $out */
        $out = gmp_add($augend, $addend);
        return $out;
    }

    /**
     * {@inheritDoc}
     * @see GmpMathInterface::sub()
     */
    public function sub(GMP $minuend, GMP $subtrahend): GMP
    {
        /** @var GMP $out */
        $out = gmp_sub($minuend, $subtrahend);
        return $out;
    }

    /**
     * {@inheritDoc}
     * @see GmpMathInterface::mul()
     */
    public function mul(GMP $multiplier, GMP $multiplicand): GMP
    {
        /** @var GMP $out */
        $out = gmp_mul($multiplier, $multiplicand);
        return $out;
    }

    /**
     * {@inheritDoc}
     * @see GmpMathInterface::div()
     */
    public function div(GMP $dividend, GMP $divisor): GMP
    {
        /** @var GMP $out */
        $out = gmp_div($dividend, $divisor);
        return $out;
    }

    /**
     * {@inheritDoc}
     * @see GmpMathInterface::pow()
     */
    public function pow(GMP $base, int $exponent): GMP
    {
        /** @var GMP $out */
        $out = $base ** $exponent;
        return $out;
    }

    /**
     * {@inheritDoc}
     * @see GmpMathInterface::bitwiseAnd()
     */
    public function bitwiseAnd(GMP $first, GMP $other): GMP
    {
        /** @var GMP $out */
        $out = gmp_and($first, $other);
        return $out;
    }

    /**
     * {@inheritDoc}
     * @see GmpMathInterface::rightShift()
     */
    public function rightShift(GMP $number, int $positions): GMP
    {
        // Shift 1 right = div / 2
        /** @var GMP $two */
        $two = gmp_init(2, 10);
        /** @var GMP $exp */
        $exp = $two ** $positions;
        /** @var GMP $out */
        $out = gmp_div($number, $exp);
        return $out;
    }

    /**
     * {@inheritDoc}
     * @see GmpMathInterface::bitwiseXor()
     */
    public function bitwiseXor(GMP $first, GMP $other): GMP
    {
        /** @var GMP $out */
        $out = gmp_xor($first, $other);
        return $out;
    }

    /**
     * {@inheritDoc}
     * @see GmpMathInterface::leftShift()
     */
    public function leftShift(GMP $number, int $positions): GMP
    {
        /** @var GMP $two */
        $two = gmp_init(2, 10);
        /** @var GMP $exp */
        $exp = $two ** $positions;
        // Shift 1 left = mul by 2
        /** @var GMP $out */
        $out = gmp_mul($number, $exp);
        return $out;
    }

    /**
     * {@inheritDoc}
     * @see GmpMathInterface::toString()
     */
    public function toString(GMP $value): string
    {
        return gmp_strval($value);
    }

    /**
     * {@inheritDoc}
     * @see GmpMathInterface::hexDec()
     */
    public function hexDec(string $hexString): string
    {
        return gmp_strval(gmp_init($hexString, 16), 10);
    }

    /**
     * {@inheritDoc}
     * @see GmpMathInterface::decHex()
     */
    public function decHex(string $decString): string
    {
        $decString = gmp_init($decString, 10);

        if (gmp_cmp($decString, 0) < 0) {
            throw new \InvalidArgumentException('Unable to convert negative integer to string');
        }

        $hex = gmp_strval($decString, 16);

        if (BinaryString::length($hex) % 2 != 0) {
            $hex = '0'.$hex;
        }

        return $hex;
    }

    /**
     * {@inheritDoc}
     * @see GmpMathInterface::powmod()
     */
    public function powmod(GMP $base, GMP $exponent, GMP $modulus): GMP
    {
        /** @var GMP $zero */
        $zero = gmp_init(0, 10);
        if ($this->cmp($exponent, $zero) < 0) {
            throw new \InvalidArgumentException("Negative exponents (" . $this->toString($exponent) . ") not allowed.");
        }

        /** @var GMP $out */
        $out = gmp_powm($base, $exponent, $modulus);
        return $out;
    }

    /**
     * {@inheritDoc}
     * @see GmpMathInterface::isPrime()
     */
    public function isPrime(GMP $n): bool
    {
        $prob = gmp_prob_prime($n);

        if ($prob > 0) {
            return true;
        }

        return false;
    }

    /**
     * {@inheritDoc}
     * @see GmpMathInterface::nextPrime()
     */
    public function nextPrime(GMP $currentPrime): GMP
    {
        /** @var GMP $out */
        $out = gmp_nextprime($currentPrime);
        return $out;
    }

    /**
     * {@inheritDoc}
     * @see GmpMathInterface::inverseMod()
     */
    public function inverseMod(GMP $a, GMP $m): GMP
    {
        /** @var GMP $out */
        $out = gmp_invert($a, $m);
        return $out;
    }

    /**
     * {@inheritDoc}
     * @see GmpMathInterface::jacobi()
     */
    public function jacobi(GMP $a, GMP $p): int
    {
        return gmp_jacobi($a, $p);
    }

    /**
     * @param GMP $x
     * @param int $byteSize
     * @return string
     */
    public function intToFixedSizeString(GMP $x, int $byteSize): string
    {
        if ($byteSize < 0) {
            throw new \RuntimeException("Byte size cannot be negative");
        }

        if (gmp_cmp($x, 0) < 0) {
            throw new \RuntimeException("x was negative - not yet supported");
        }

        /** @var GMP $two */
        $two = gmp_init(2);
        /** @var GMP $range */
        $range = $two ** ($byteSize * 8);
        if (NumberSize::bnNumBits($this, $x) >= NumberSize::bnNumBits($this, $range)) {
            throw new \RuntimeException("Number overflows byte size");
        }

        $maskShift = $two ** 8;
        $mask = gmp_mul(gmp_init(255), $range);

        $binary = '';
        for ($i = $byteSize - 1; $i >= 0; $i--) {
            $mask = gmp_div($mask, $maskShift);
            $binary .= pack(
                'C',
                gmp_strval(
                    gmp_div(
                        gmp_and($x, $mask),
                        $two ** ($i * 8)
                    )
                )
            );
        }
        return $binary;
    }

    /**
     * {@inheritDoc}
     * @see GmpMathInterface::intToString()
     */
    public function intToString(GMP $x): string
    {
        if (gmp_cmp($x, 0) < 0) {
            throw new \InvalidArgumentException('Unable to convert negative integer to string');
        }

        $hex = gmp_strval($x, 16);

        if (BinaryString::length($hex) % 2 != 0) {
            $hex = '0'.$hex;
        }

        return pack('H*', $hex);
    }

    /**
     * {@inheritDoc}
     * @see GmpMathInterface::stringToInt()
     */
    public function stringToInt(string $s): GMP
    {
        /** @var GMP $result */
        $result = gmp_init(0, 10);
        $sLen = BinaryString::length($s);

        for ($c = 0; $c < $sLen; $c ++) {
            /** @var GMP $result */
            $result = gmp_add(gmp_mul(256, $result), gmp_init(ord($s[$c]), 10));
        }

        return $result;
    }

    /**
     * {@inheritDoc}
     * @see GmpMathInterface::digestInteger()
     */
    public function digestInteger(GMP $m): GMP
    {
        return $this->stringToInt(hash('sha1', $this->intToString($m), true));
    }

    /**
     * {@inheritDoc}
     * @see GmpMathInterface::gcd2()
     */
    public function gcd2(GMP $a, GMP $m): GMP
    {
        /** @var GMP $zero */
        $zero = gmp_init(0);
        while ($this->cmp($a, $zero) > 0) {
            $temp = $a;
            $a = $this->mod($m, $a);
            $m = $temp;
        }

        return $m;
    }

    /**
     * {@inheritDoc}
     * @see GmpMathInterface::baseConvert()
     */
    public function baseConvert(string $value, int $fromBase, int $toBase): string
    {
        return gmp_strval(gmp_init($value, $fromBase), $toBase);
    }

    /**
     * {@inheritDoc}
     * @see GmpMathInterface::getNumberTheory()
     */
    public function getNumberTheory(): NumberTheory
    {
        return new NumberTheory($this);
    }

    /**
     * @param GMP $modulus
     * @return ModularArithmetic
     */
    public function getModularArithmetic(GMP $modulus): ModularArithmetic
    {
        return new ModularArithmetic($this, $modulus);
    }
}
