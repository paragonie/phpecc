<?php
declare(strict_types=1);

/***********************************************************************
Copyright (C) 2012 Matyas Danter

Permission is hereby granted, free of charge, to any person obtaining
a copy of this software and associated documentation files (the "Software"),
to deal in the Software without restriction, including without limitation
the rights to use, copy, modify, merge, publish, distribute, sublicense,
and/or sell copies of the Software, and to permit persons to whom the
Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included
in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS
OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES
OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE,
ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
OTHER DEALINGS IN THE SOFTWARE.
 *************************************************************************/
namespace Mdanter\Ecc\Primitives;

use GMP;
use Mdanter\Ecc\Exception\PointRecoveryException;
use Mdanter\Ecc\Exception\SquareRootException;
use Mdanter\Ecc\Math\GmpMathInterface;
use Mdanter\Ecc\Math\ModularArithmetic;
use Mdanter\Ecc\Random\RandomNumberGeneratorInterface;

/**
 * This class is a representation of an EC over a field modulo a prime number
 *
 * Important objectives for this class are:
 * - Does the curve contain a point?
 * - Comparison of two curves.
 */
class CurveFp implements CurveFpInterface
{

    /**
     * @var CurveParameters
     */
    protected $parameters;

    /**
     *
     * @var GmpMathInterface
     */
    protected $adapter = null;

    /**
     *
     * @var ModularArithmetic
     */
    protected $modAdapter = null;

    /**
     * Constructor that sets up the instance variables.
     *
     * @param CurveParameters $parameters
     * @param GmpMathInterface $adapter
     */
    public function __construct(CurveParameters $parameters, GmpMathInterface $adapter)
    {
        $this->parameters = $parameters;
        $this->adapter = $adapter;
        $this->modAdapter = new ModularArithmetic($this->adapter, $this->parameters->getPrime());
    }

    /**
     * {@inheritDoc}
     * @see CurveFpInterface::getModAdapter
     */
    public function getModAdapter(): ModularArithmetic
    {
        return $this->modAdapter;
    }

    /**
     * {@inheritDoc}
     * @see CurveFpInterface::getPoint
     */
    public function getPoint(GMP $x, GMP $y, ?GMP $order = null): PointInterface
    {
        return new Point($this->adapter, $this, $x, $y, $order);
    }
    
    /**
     * {@inheritDoc}
     * @see CurveFpInterface::getInfinity
     */
    public function getInfinity(): PointInterface
    {
        /** @var GMP $zero */
        $zero = gmp_init(0, 10);
        return new Point($this->adapter, $this, clone $zero, clone $zero, null, true);
    }

    /**
     * {@inheritDoc}
     * @see CurveFpInterface::getGenerator
     */
    public function getGenerator(GMP $x, GMP $y, GMP $order, ?RandomNumberGeneratorInterface $randomGenerator = null): GeneratorPoint
    {
        return new GeneratorPoint($this->adapter, $this, $x, $y, $order, $randomGenerator);
    }

    /**
     * @param bool $wasOdd
     * @param GMP $x
     * @return GMP
     */
    public function recoverYfromX(bool $wasOdd, GMP $x): GMP
    {
        $math = $this->adapter;
        $prime = $this->getPrime();

        /** @var GMP $one */
        $one = gmp_init(1, 10);
        /** @var GMP $two */
        $two = gmp_init(2, 10);
        /** @var GMP $three */
        $three = gmp_init(3, 10);
        try {
            $root = $this->adapter->getNumberTheory()->squareRootModP(
                $math->add(
                    $math->add(
                        $this->modAdapter->pow($x, $three),
                        $math->mul($this->getA(), $x)
                    ),
                    $this->getB()
                ),
                $prime
            );
        } catch (SquareRootException $e) {
            throw new PointRecoveryException("Failed to recover y coordinate for point", 0, $e);
        }

        if ($math->equals($math->mod($root, $two), $one) === $wasOdd) {
            return $root;
        } else {
            return $math->sub($prime, $root);
        }
    }
    /**
     * {@inheritDoc}
     * @see CurveFpInterface::contains
     */
    public function contains(GMP $x, GMP $y): bool
    {
        $math = $this->adapter;
        /** @var GMP $zero */
        $zero = gmp_init(0, 10);

        return $math->equals(
            $this->modAdapter->sub(
                $math->pow($y, 2),
                $math->add(
                    $math->add(
                        $math->pow($x, 3),
                        $math->mul($this->getA(), $x)
                    ),
                    $this->getB()
                )
            ),
            $zero
        );
    }

    /**
     * {@inheritDoc}
     * @see CurveFpInterface::getA
     */
    public function getA(): GMP
    {
        return $this->parameters->getA();
    }

    /**
     * {@inheritDoc}
     * @see CurveFpInterface::getB
     */
    public function getB(): GMP
    {
        return $this->parameters->getB();
    }

    /**
     * {@inheritDoc}
     * @see CurveFpInterface::getPrime
     */
    public function getPrime(): GMP
    {
        return $this->parameters->getPrime();
    }

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->parameters->getSize();
    }

    /**
     * {@inheritDoc}
     * @see CurveFpInterface::cmp
     */
    public function cmp(CurveFpInterface $other): int
    {
        $math = $this->adapter;

        $equal  = $math->equals($this->getA(), $other->getA());
        $equal &= $math->equals($this->getB(), $other->getB());
        $equal &= $math->equals($this->getPrime(), $other->getPrime());

        return ($equal) ? 0 : 1;
    }

    /**
     * {@inheritDoc}
     * @see CurveFpInterface::equals
     */
    public function equals(CurveFpInterface $other): bool
    {
        return $this->cmp($other) == 0;
    }

    /**
     * {@inheritDoc}
     * @see CurveFpInterface::__toString
     */
    public function __toString(): string
    {
        return 'curve(' . $this->adapter->toString($this->getA()) . ', ' . $this->adapter->toString($this->getB()) . ', ' . $this->adapter->toString($this->getPrime()) . ')';
    }

    /**
     * @return array
     */
    public function __debugInfo()
    {
        return [
            'a' => $this->adapter->toString($this->getA()),
            'b' => $this->adapter->toString($this->getB()),
            'prime' => $this->adapter->toString($this->getPrime())
        ];
    }
}
