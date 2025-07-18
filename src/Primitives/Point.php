<?php
declare(strict_types=1);

namespace Mdanter\Ecc\Primitives;

use GMP;
use Mdanter\Ecc\Exception\PointException;
use Mdanter\Ecc\Exception\PointNotOnCurveException;
use Mdanter\Ecc\Math\ConstantTimeMath;
use Mdanter\Ecc\Math\GmpMathInterface;
use Mdanter\Ecc\Math\ModularArithmetic;

/**
 * *********************************************************************
 * Copyright (C) 2012 Matyas Danter
 *
 * Permission is hereby granted, free of charge, to any person obtaining
 * a copy of this software and associated documentation files (the "Software"),
 * to deal in the Software without restriction, including without limitation
 * the rights to use, copy, modify, merge, publish, distribute, sublicense,
 * and/or sell copies of the Software, and to permit persons to whom the
 * Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included
 * in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS
 * OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
 * THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES
 * OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE,
 * ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
 * OTHER DEALINGS IN THE SOFTWARE.
 * ***********************************************************************
 */

/**
 * This class is where the elliptic curve arithmetic takes place.
 * The important methods are:
 * - add: adds two points according to ec arithmetic
 * - double: doubles a point on the ec field mod p
 * - mul: uses double and add to achieve multiplication The rest of the methods are there for supporting the ones above.
 */
class Point implements PointInterface
{
    /**
     * @var CurveFpInterface
     */
    private $curve;

    /**
     * @var GmpMathInterface
     */
    private $adapter;

    /**
     * @var ModularArithmetic
     */
    private $modAdapter;

    /**
     * @var ConstantTimeMath
     */
    private $ctMath;

    /**
     * @var GMP
     */
    private $x;

    /**
     * @var GMP
     */
    private $y;

    /**
     * @var GMP
     */
    private $order;

    /**
     * @var bool
     */
    private $infinity;

    /**
     * @var int
     */
    private $windowSize;

    /**
     * Initialize a new instance
     *
     * @param GmpMathInterface     $adapter
     * @param CurveFpInterface     $curve
     * @param GMP                 $x
     * @param GMP                 $y
     * @param ?GMP                 $order
     * @param bool                 $infinity
     *
     * @throws \RuntimeException    when either the curve does not contain the given coordinates or
     *                                      when order is not null and P(x, y) * order is not equal to infinity.
     */
    public function __construct(
        GmpMathInterface $adapter,
        CurveFpInterface $curve,
        GMP $x,
        GMP $y,
        ?GMP $order = null,
        bool $infinity = false
    ) {
        /** @var GMP $zero */
        $zero = gmp_init(0, 10);
        $this->adapter    = $adapter;
        $this->modAdapter = $curve->getModAdapter();
        $this->ctMath     = new ConstantTimeMath();
        $this->curve      = $curve;
        $this->x          = $x;
        $this->y          = $y;
        $this->order      = $order !== null ? $order : $zero;
        $this->infinity   = !empty($infinity);
        if (! $infinity && ! $curve->contains($x, $y)) {
            throw new PointNotOnCurveException($x, $y, $curve);
        }

        if (!is_null($order)) {
            $mul = $this->mul($order);
            if (!$mul->isInfinity()) {
                throw new PointException("SELF * ORDER MUST EQUAL INFINITY. (" . (string)$mul . " found instead)");
            }
        }
    }

    public function setWindowSize(int $n): PointInterface
    {
        $this->windowSize = $n;

        return $this;
    }

    public function getWindowSize(): int
    {
        return $this->windowSize ?? 0;
    }

    /**
     * @return GmpMathInterface
     */
    public function getAdapter(): GmpMathInterface
    {
        return $this->adapter;
    }

    /**
     * {@inheritDoc}
     * @see PointInterface::isInfinity()
     */
    public function isInfinity(): bool
    {
        return $this->infinity;
    }

    /**
     * {@inheritDoc}
     * @see PointInterface::getCurve()
     */
    public function getCurve(): CurveFpInterface
    {
        return $this->curve;
    }

    /**
     * {@inheritDoc}
     * @see PointInterface::getOrder()
     */
    public function getOrder(): GMP
    {
        return $this->order;
    }

    /**
     * {@inheritDoc}
     * @see PointInterface::getX()
     */
    public function getX(): GMP
    {
        return $this->x;
    }

    /**
     * {@inheritDoc}
     * @see PointInterface::getY()
     */
    public function getY(): GMP
    {
        return $this->y;
    }

    /**
     * {@inheritDoc}
     * @see PointInterface::add()
     * @return self
     */
    public function add(PointInterface $addend): PointInterface
    {
        if (! $this->curve->equals($addend->getCurve())) {
            throw new \RuntimeException("The Elliptic Curves do not match.");
        }

        if ($addend->isInfinity()) {
            return clone $this;
        }

        if ($this->isInfinity()) {
            return clone $addend;
        }
        /** @var Point $infinity */
        $infinity = $this->curve->getInfinity();

        $math = $this->ctMath;
        $modMath = $this->modAdapter;

        // if (x1 == x2)
        $return = $this->getDouble();
        if ($math->equals($addend->getX(), $this->x)) {
            // if (y1 == y2) return doubled(), else return pointAtInfinity()
            // Avoids leaking comparison value via branching side-channels
            $bit = $math->equalsReturnInt($addend->getY(), $this->y);
            $this->cswap($return, $infinity, $bit ^ 1, $this->curve->getSize());
            return $return;
        }

        $slope = $modMath->div(
            $math->sub($addend->getY(), $this->y),
            $math->sub($addend->getX(), $this->x)
        );

        $xR = $modMath->sub(
            $math->sub($math->pow($slope, 2), $this->x),
            $addend->getX()
        );

        $yR = $modMath->sub(
            $math->mul($slope, $math->sub($this->x, $xR)),
            $this->y
        );

        return $this->curve->getPoint($xR, $yR, $this->order);
    }

    /**
     * {@inheritDoc}
     * @see PointInterface::cmp()
     */
    public function cmp(PointInterface $other): int
    {
        if ($other->isInfinity() && $this->isInfinity()) {
            return 0;
        }

        if ($other->isInfinity() || $this->isInfinity()) {
            return 1;
        }

        $math = new ConstantTimeMath();
        $equal = ($math->equals($this->x, $other->getX()));
        $equal &= ($math->equals($this->y, $other->getY()));
        $equal &= $this->isInfinity() == $other->isInfinity();
        $equal &= $this->curve->equals($other->getCurve());

        if ($equal) {
            return 0;
        }

        return 1;
    }

    /**
     * {@inheritDoc}
     * @see PointInterface::equals()
     */
    public function equals(PointInterface $other): bool
    {
        return $this->cmp($other) == 0;
    }

    /**
     * {@inheritDoc}
     * @see PointInterface::mul()
     */
    public function mul(GMP $multiplier): PointInterface
    {
        if ($this->isInfinity()) {
            return $this->curve->getInfinity();
        }
        $constantTimeAdapter = new ConstantTimeMath();

        /** @var GMP $zero */
        $zero = gmp_init(0, 10);
        if ($constantTimeAdapter->cmp($this->order, $zero) > 0) {
            $multiplier = $constantTimeAdapter->mod($multiplier, $this->order);
        }

        if ($constantTimeAdapter->equals($multiplier, $zero)) {
            return $this->curve->getInfinity();
        }

        /** @var Point[] $r */
        $r = [
            $this->curve->getInfinity(),
            clone $this
        ];

        $k = $this->curve->getSize();
        $multiplier = str_pad(
            $constantTimeAdapter->baseConvert(
                $constantTimeAdapter->toString($multiplier),
                10,
                2
            ),
            $k,
            '0',
            STR_PAD_LEFT
        );

        for ($i = 0; $i < $k; $i++) {
            $j = $multiplier[$i];

            $this->cswap($r[0], $r[1], $j ^ 1, $k);

            $r[0] = $r[0]->add($r[1]);
            $r[1] = $r[1]->getDouble();

            $this->cswap($r[0], $r[1], $j ^ 1, $k);
        }

        $r[0]->validate();

        return $r[0];
    }

    /**
     * @param Point $a
     * @param Point $b
     * @param int $cond
     * @param int $curveSize
     */
    private function cswap(self $a, self $b, int $cond, int $curveSize)
    {
        $this->cswapValue($a->x, $b->x, $cond, $curveSize);
        $this->cswapValue($a->y, $b->y, $cond, $curveSize);
        $this->cswapValue($a->order, $b->order, $cond, $curveSize);
        $this->cswapValue($a->infinity, $b->infinity, $cond, 8);
    }

    /**
     * @param bool|GMP $a
     * @param bool|GMP $b
     * @param int $cond
     * @param int $maskBitSize
     */
    public function cswapValue(&$a, &$b, int $cond, int $maskBitSize): void
    {
        $isGMP =  $a instanceof GMP;

        $sa = $isGMP ? $a : gmp_init(intval($a), 10);
        $sb = $isGMP ? $b : gmp_init(intval($b), 10);

        $mask = str_pad('', $maskBitSize, (string) (1 - intval($cond)), STR_PAD_LEFT);
        $mask = gmp_init($mask, 2);
        /** @var GMP $mask */

        $taA = $this->adapter->bitwiseAnd($sa, $mask);
        $taB = $this->adapter->bitwiseAnd($sb, $mask);

        /** @var GMP $sa */
        $sa = $this->adapter->bitwiseXor($this->adapter->bitwiseXor($sa, $sb), $taB);
        /** @var GMP $sb */
        $sb = $this->adapter->bitwiseXor($this->adapter->bitwiseXor($sa, $sb), $taA);
        /** @var GMP $sa */
        $sa = $this->adapter->bitwiseXor($this->adapter->bitwiseXor($sa, $sb), $taB);

        $a = $isGMP ? $sa : (bool) gmp_strval($sa);
        $b = $isGMP ? $sb : (bool) gmp_strval($sb);
    }

    /**
     *
     */
    private function validate()
    {
        if (! $this->infinity && ! $this->curve->contains($this->x, $this->y)) {
            throw new \RuntimeException('Invalid point');
        }
    }

    /**
     * {@inheritDoc}
     * @return self
     * @see PointInterface::getDouble
     */
    public function getDouble(): PointInterface
    {
        if ($this->isInfinity()) {
            return $this->curve->getInfinity();
        }

        $math = new ConstantTimeMath();
        $modMath = $this->modAdapter;

        /** @var GMP $two */
        $two = gmp_init(2, 10);
        /** @var GMP $three */
        $three = gmp_init(3, 10);

        $a = $this->curve->getA();
        $threeX2 = $math->mul($three, $math->pow($this->x, 2));

        $tangent = $modMath->div(
            $math->add($threeX2, $a),
            $math->mul($two, $this->y)
        );

        $x3 = $modMath->sub(
            $math->pow($tangent, 2),
            $math->mul($two, $this->x)
        );

        $y3 = $modMath->sub(
            $math->mul($tangent, $math->sub($this->x, $x3)),
            $this->y
        );

        return $this->curve->getPoint($x3, $y3, $this->order);
    }

    /**
     * {@inheritDoc}
     * @see PointInterface::__toString
     */
    public function __toString(): string
    {
        if ($this->infinity) {
            return '[ (infinity) on ' . (string) $this->curve . ' ]';
        }

        return "[ (" . $this->adapter->toString($this->x) . "," . $this->adapter->toString($this->y) . ') on ' . (string) $this->curve . ' ]';
    }

    /**
     * @return array
     */
    public function __debugInfo(): array
    {
        $info = [
            'x' => $this->adapter->toString($this->x),
            'y' => $this->adapter->toString($this->y),
            'z' => $this->adapter->toString($this->order),
            'curve' => $this->curve
        ];

        if ($this->infinity) {
            $info['x'] = 'inf (' . $info['x'] . ')';
            $info['y'] = 'inf (' . $info['y'] . ')';
            $info['z'] = 'inf (' . $info['z'] . ')';
        }

        return $info;
    }
}
