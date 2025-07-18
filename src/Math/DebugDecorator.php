<?php /** @noinspection PhpMissingParamTypeInspection */
/** @noinspection PhpMissingParamTypeInspection */

/** @noinspection PhpMissingParamTypeInspection */

namespace Mdanter\Ecc\Math;

use Mdanter\Ecc\Primitives\GeneratorPoint;

/**
 * Debug helper class to trace all calls to math functions along with the provided params and result.
 */
class DebugDecorator implements GmpMathInterface
{
    /**
     * @var GmpMathInterface
     */
    private $adapter;

    /**
     * @var callable
     */
    private $writer;

    /**
     * @param GmpMathInterface     $adapter
     * @param ?callable            $callback
     */
    public function __construct(GmpMathInterface $adapter, ?callable $callback = null)
    {
        $this->adapter = $adapter;
        $this->writer = $callback ?: function ($message) {
            echo $message;
        };
    }

    /**
     *
     * @param string $message
     */
    private function write($message)
    {
        call_user_func($this->writer, $message);
    }

    /**
     *
     * @param  string $func
     * @param  array  $args
     * @return mixed
     *
     * @psalm-suppress UnusedReturnValue
     */
    private function call($func, $args)
    {
        $strArgs = array_map(
            function ($arg) {
                if ($arg instanceof \GMP) {
                    return var_export($this->adapter->toString($arg), true);
                } else {
                    return var_export($arg, true);
                }
            },
            $args
        );

        if (strpos($func, '::')) {
            list(, $func) = explode('::', $func);
        }

        $this->write($func.'('.implode(', ', $strArgs).')');

        $res = call_user_func_array([ $this->adapter, $func ], $args);

        if ($res instanceof \GMP) {
            $this->write(' => ' . var_export($this->adapter->toString($res), true) . PHP_EOL);
        } else {
            $this->write(' => ' . var_export($res, true) . PHP_EOL);
        }

        return $res;
    }

    /**
     * {@inheritDoc}
     * @see GmpMathInterface::cmp
     */
    public function cmp(\GMP $first, \GMP $other): int
    {
        $func = __METHOD__;
        $args = func_get_args();

        return call_user_func(
            array(
            $this,
            'call',
            ),
            $func,
            $args
        );
    }


    /**
     * {@inheritDoc}
     * @see GmpMathInterface::cmp
     */
    public function equals(\GMP $first, \GMP $other): bool
    {
        $func = __METHOD__;
        $args = func_get_args();

        return call_user_func(
            array(
                $this,
                'call',
            ),
            $func,
            $args
        );
    }

    /**
     * {@inheritDoc}
     * @see GmpMathInterface::mod
     */
    public function mod(\GMP $number, \GMP $modulus): \GMP
    {
        $func = __METHOD__;
        $args = func_get_args();

        return call_user_func(
            array(
            $this,
            'call',
            ),
            $func,
            $args
        );
    }

    /**
     * {@inheritDoc}
     * @see GmpMathInterface::add
     */
    public function add(\GMP $augend, \GMP $addend): \GMP
    {
        $func = __METHOD__;
        $args = func_get_args();

        return call_user_func(
            array(
            $this,
            'call',
            ),
            $func,
            $args
        );
    }

    /**
     * {@inheritDoc}
     * @see GmpMathInterface::sub
     */
    public function sub(\GMP $minuend, \GMP $subtrahend): \GMP
    {
        $func = __METHOD__;
        $args = func_get_args();

        return call_user_func(
            array(
            $this,
            'call',
            ),
            $func,
            $args
        );
    }

    /**
     * {@inheritDoc}
     * @see GmpMathInterface::mul
     */
    public function mul(\GMP $multiplier, \GMP $multiplicand): \GMP
    {
        $func = __METHOD__;
        $args = func_get_args();

        return call_user_func(
            array(
            $this,
            'call',
            ),
            $func,
            $args
        );
    }

    /**
     * {@inheritDoc}
     * @see GmpMathInterface::div
     */
    public function div(\GMP $dividend, \GMP $divisor): \GMP
    {
        $func = __METHOD__;
        $args = func_get_args();

        return call_user_func(
            array(
            $this,
            'call',
            ),
            $func,
            $args
        );
    }

    /**
     * {@inheritDoc}
     * @see GmpMathInterface::pow
     */
    public function pow(\GMP $base, int $exponent): \GMP
    {
        $func = __METHOD__;
        $args = func_get_args();

        return call_user_func(
            array(
            $this,
            'call',
            ),
            $func,
            $args
        );
    }

    /**
     * {@inheritDoc}
     * @see GmpMathInterface::bitwiseAnd
     */
    public function bitwiseAnd(\GMP $first, \GMP $other): \GMP
    {
        $func = __METHOD__;
        $args = func_get_args();

        return call_user_func(
            array(
            $this,
            'call',
            ),
            $func,
            $args
        );
    }

    /**
     * {@inheritDoc}
     * @see \Mdanter\Ecc\MathAdapter::toString()
     */
    public function toString(\GMP $value): string
    {
        return $this->adapter->toString($value);
    }

    /**
     * {@inheritDoc}
     * @see GmpMathInterface::hexDec
     */
    public function hexDec(string $hexString): string
    {
        $func = __METHOD__;
        $args = func_get_args();

        return call_user_func(
            array(
            $this,
            'call',
            ),
            $func,
            $args
        );
    }

    /**
     * {@inheritDoc}
     * @see GmpMathInterface::decHex
     */
    public function decHex(string $decString): string
    {
        $func = __METHOD__;
        $args = func_get_args();

        return call_user_func(
            array(
            $this,
            'call',
            ),
            $func,
            $args
        );
    }

    /**
     * {@inheritDoc}
     * @see GmpMathInterface::powmod
     */
    public function powmod(\GMP $base, \GMP $exponent, \GMP $modulus): \GMP
    {
        $func = __METHOD__;
        $args = func_get_args();

        return call_user_func(
            array(
            $this,
            'call',
            ),
            $func,
            $args
        );
    }

    /**
     * {@inheritDoc}
     * @see GmpMathInterface::isPrime
     */
    public function isPrime(\GMP $n): bool
    {
        $func = __METHOD__;
        $args = func_get_args();

        return call_user_func(
            array(
            $this,
            'call',
            ),
            $func,
            $args
        );
    }

    /**
     * {@inheritDoc}
     * @see GmpMathInterface::nextPrime
     */
    public function nextPrime(\GMP $currentPrime): \GMP
    {
        $func = __METHOD__;
        $args = func_get_args();

        return call_user_func(
            array(
            $this,
            'call',
            ),
            $func,
            $args
        );
    }

    /**
     * {@inheritDoc}
     * @see GmpMathInterface::inverseMod
     */
    public function inverseMod(\GMP $a, \GMP $m): \GMP
    {
        $func = __METHOD__;
        $args = func_get_args();

        return call_user_func(
            array(
            $this,
            'call',
            ),
            $func,
            $args
        );
    }

    /**
     * {@inheritDoc}
     * @see GmpMathInterface::jacobi
     */
    public function jacobi(\GMP $a, \GMP $p): int
    {
        $func = __METHOD__;
        $args = func_get_args();

        return call_user_func(
            array(
            $this,
            'call',
            ),
            $func,
            $args
        );
    }

    /**
     * {@inheritDoc}
     * @see GmpMathInterface::intToString
     */
    public function intToFixedSizeString(\GMP $x, int $byteSize): string
    {
        $func = __METHOD__;
        $args = func_get_args();

        return call_user_func(
            array(
                $this,
                'call',
            ),
            $func,
            $args
        );
    }

    /**
     * {@inheritDoc}
     * @see GmpMathInterface::intToString
     */
    public function intToString(\GMP $x): string
    {
        $func = __METHOD__;
        $args = func_get_args();

        return call_user_func(
            array(
            $this,
            'call',
            ),
            $func,
            $args
        );
    }

    /**
     * {@inheritDoc}
     * @see GmpMathInterface::stringToInt
     */
    public function stringToInt(string $s): \GMP
    {
        $func = __METHOD__;
        $args = func_get_args();

        return call_user_func(
            array(
            $this,
            'call',
            ),
            $func,
            $args
        );
    }

    /**
     * {@inheritDoc}
     * @see GmpMathInterface::digestInteger
     */
    public function digestInteger(\GMP $m): \GMP
    {
        $func = __METHOD__;
        $args = func_get_args();

        return call_user_func(
            array(
            $this,
            'call',
            ),
            $func,
            $args
        );
    }

    /**
     * {@inheritDoc}
     * @see GmpMathInterface::gcd2
     */
    public function gcd2(\GMP $a, \GMP $m): \GMP
    {
        $func = __METHOD__;
        $args = func_get_args();

        return call_user_func(
            array(
            $this,
            'call',
            ),
            $func,
            $args
        );
    }

    /**
     * {@inheritDoc}
     * @see GmpMathInterface::rightShift
     */
    public function rightShift(\GMP $number, int $positions): \GMP
    {
        $func = __METHOD__;
        $args = func_get_args();

        return call_user_func(
            array(
            $this,
            'call',
            ),
            $func,
            $args
        );
    }

    /**
     * {@inheritDoc}
     * @see GmpMathInterface::leftShift
     */
    public function leftShift(\GMP $number, int $positions): \GMP
    {
        $func = __METHOD__;
        $args = func_get_args();

        return call_user_func(
            array(
            $this,
            'call',
            ),
            $func,
            $args
        );
    }

    /**
     * {@inheritDoc}
     * @see GmpMathInterface::bitwiseXor
     */
    public function bitwiseXor(\GMP $first, \GMP $other): \GMP
    {
        $func = __METHOD__;
        $args = func_get_args();

        return call_user_func(
            array(
            $this,
            'call'
            ),
            $func,
            $args
        );
    }

    /**
     * {@inheritDoc}
     * @see GmpMathInterface::baseConvert
     */
    public function baseConvert(string $value, int $fromBase, int $toBase): string
    {
        $func = __METHOD__;
        $args = func_get_args();

        return call_user_func(
            array(
            $this,
            'call'
            ),
            $func,
            $args
        );
    }

    /**
     * @see GmpMathInterface::getEcMath
     */
    public function getEcMath(GeneratorPoint $generatorPoint, $input)
    {
        $func = __METHOD__;
        $args = func_get_args();

        return call_user_func(
            array(
            $this,
            'call'
            ),
            $func,
            $args
        );
    }

    /**
     * {@inheritDoc}
     * @see GmpMathInterface::getModularArithmetic
     */
    public function getModularArithmetic(\GMP $modulus): ModularArithmetic
    {
        $func = __METHOD__;
        $args = func_get_args();

        return call_user_func(
            array(
                $this,
                'call'
            ),
            $func,
            $args
        );
    }

    /**
     * {@inheritDoc}
     * @see GmpMathInterface::getNumberTheory
     */
    public function getNumberTheory(): NumberTheory
    {
        $func = __METHOD__;
        $args = func_get_args();

        return call_user_func(
            array(
            $this,
            'call'
            ),
            $func,
            $args
        );
    }
}
