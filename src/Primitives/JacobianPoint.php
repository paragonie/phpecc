<?php
declare(strict_types=1);
namespace Mdanter\Ecc\Primitives;

use GMP;
use Mdanter\Ecc\Curves\CurveFactory;
use Mdanter\Ecc\Curves\SecgCurve;
use Mdanter\Ecc\Exception\PointException;

/**
 * *********************************************************************
 * Copyright (C) 2012 Matyas Danter.
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
 * Noble-Secp256k1 - MIT License (c) 2019 Paul Miller (paulmillr.com).
 */

/**
 * This class incorporates work from Mdanter's ECC Primitive Point class and Paul Miller's Noble-Secp256k1 Library.
 * The original works are licensed under the MIT License.
 *
 * This JacobianPoint class contains all the important methods to handle JacobianPoint Manipulation as to
 * verify and sign Schnorr signatures.
 */
class JacobianPoint
{
    // ==============================================================================
    // Global Constants of the 256-Bit Prime Field Weierstrass Curve
    // (Koblitz Curve/Secp256k1)
    // Curve Formula: y² ≡ x³ + ax + b, where a = 0, b = 7
    // ==============================================================================
    // A, B = Curve Parameters
    public const A = 0;
    public const B = 7;

    // Base Point or Generator Point
    // x, y = (55066263022277343669578718895168534326250603453777594175500187360389116729240,
    //         32670510020758816978083085130507043184471273380659243275938904335757337482424)
    public const G_X = '0x79BE667EF9DCBBAC55A06295CE870B07029BFCDB2DCE28D959F2815B16F81798';
    public const G_Y = '0x483ADA7726A3C4655DA4FBFC0E1108A8FD17B448A68554199C47D08FFB10D4B8';

    // P = The field we are doing computations on:
    // Curve.P === (2n**256n - 2n**32n - 2n**9n - 2n**8n - 2n**7n - 2n**6n - 2n**4n - 1n))
    // 115792089237316195423570985008687907853269984665640564039457584007908834671663
    public const CURVE_P = '0xFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFEFFFFFC2F';

    // Beta (Used for Endomorphism)
    // 55594575648329892869085402983802832744385952214688224221778511981742606582254
    public const CURVE_BETA = '0x7ae96a2b657c07106e64479eac3434e99cf0497512f58995c1396c28719501ee';

    // N (Curve order, total count of valid points in the field.)
    // CURVE.n === (2n**256n - 2**256n)
    // 115792089237316195423570985008687907852837564279074904382605163141518161494337
    public const CURVE_N = '0xFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFEBAAEDCE6AF48A03BBFD25E8CD0364141';

    // Hal-Finney's Optimized ECDSA Verify Parameters for splitting K into k1 and k2
    // 64502973549206556628585045361533709077
    public const HF_A1 = '0x3086d221a7d46bcde86c90e49284eb15';
    // 303414439467246543595250775667605759171
    public const HF_B1 = '0xe4437ed6010e88286f547fa90abfe4c3';
    // 367917413016453100223835821029139468248
    public const HF_A2 = '0x114ca50f7a8e2f3f657c1108d9d44cfd8';
    // 64502973549206556628585045361533709077
    public const HF_B2 = '0x3086d221a7d46bcde86c90e49284eb15';
    // 2**128
    public const HFPOW_2_128 = '0x100000000000000000000000000000000';

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
    private $z;

    /**
     * @var int
     */
    private $windowSize = 8;

    /**
     * Construct a new JacobianPoint, coordinates used to represent elliptic curve points on prime curves.
     *
     * @param ?GMP $x
     * @param ?GMP $y
     * @param ?GMP $z
     */
    public function __construct(?GMP $x = null, ?GMP $y = null, ?GMP $z = null)
    {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }

    /**
     * @see PointInterface::getX
     */
    public function getX(): GMP
    {
        return $this->x;
    }

    /**
     * @see PointInterface::getY
     */
    public function getY(): GMP
    {
        return $this->y;
    }

    /**
     * @see PointInterface::getZ
     */
    public function getZ(): GMP
    {
        return $this->z;
    }

    public function setWindowSize(int $n): self
    {
        $this->windowSize = $n;

        return $this;
    }

    public function getWindowSize(): int
    {
        return $this->windowSize;
    }

    /**
     * Verify if Y-Coordinate is Even.
     */
    public function hasEvenY(): bool
    {
        return gmp_cmp(gmp_mod($this->getY(), 2), 0) === 0;
    }

    /**
     * Return a Base Generator Point with Default Window Size.
     *
     * @return GeneratorPoint
     */
    public function getBasePoint(): GeneratorPoint
    {
        $point = CurveFactory::getGeneratorByName(SecgCurve::NAME_SECP_256K1);

        $point->setWindowSize(8);

        return $point;
    }

    /**
     * Create a Base Jacobian Generator Point (Gx, Gy, 1).
     *
     * @return self
     */
    public function getBase(): self
    {
        $Gx = gmp_init(self::G_X, 16);
        $Gy = gmp_init(self::G_Y, 16);
        return new self($Gx, $Gy, gmp_init(1, 10));
    }

    /**
     * Return a Jacobian Point at 0, 1, 0.
     *
     * @return self
     */
    public function getZero(): self
    {
        return new self(gmp_init(0, 10), gmp_init(1, 10), gmp_init(0, 10));
    }

    /**
     * Convert an Affine Point to a Jacobian Point.
     */
    public function fromAffine(PointInterface $point): self
    {
        $x = $point->getX();
        $y = $point->getY();

        return new self($x, $y, gmp_init(1, 10));
    }

    /**
     * converts JacobianPoint to AffinePoint (x, y) coordinates
     * [(x, y, z) -> x = x/(z^2), y = y/(z^3)].
     *
     * @throws PointException
     */
    public function toAffine(): self
    {
        $x = $this->getX();
        $y = $this->getY();
        $z = $this->getZ();

        // invert Z
        $iz1 = gmp_invert($z, gmp_init(self::CURVE_P, 16));

        if ($iz1 === false) {
            throw new PointException('Could not invert Z');
        }

        // 1/(z^2)
        $iz2 = $this->mod(gmp_mul($iz1, $iz1));

        // 1/(z^3)
        $iz3 = $this->mod(gmp_mul($iz2, $iz1));

        // x/(z^2)
        $ax = $this->mod(gmp_mul($x, $iz2));

        // y/(z^3)
        $ay = $this->mod(gmp_mul($y, $iz3));

        // z/z === 1
        $zz = $this->mod(gmp_mul($z, $iz1));

        if (gmp_intval($zz) !== 1) {
            throw new PointException('Invalid point');
        }

        return new self($ax, $ay, gmp_init(1, 10));
    }

    /**
     * Calculates A modulo B.
     */
    public function mod(GMP $a, ?GMP $b = null): GMP
    {
        if ($b === null) {
            // Curve.P
            $b = gmp_init(self::CURVE_P, 16);
        }

        $result = gmp_mod($a, $b);

        return gmp_intval($result) >= 0 ? $result : gmp_add($result, $b);
    }

    /**
     * Negate a JacobianPoint's Y-Coordinate to get the Negative Point.
     */
    public function negate(): self
    {
        return new self($this->getX(), $this->mod(gmp_neg($this->getY())), $this->getZ());
    }

    /**
     * Bitwise Right Shift.
     *
     * @param GMP|int $x
     * @param GMP|int $n
     */
    public function shiftRight($x, $n): GMP
    {
        return gmp_div($x, gmp_pow(2, $n));
    }

    /**
     * Compare two Jacobian Points.
     */
    public function cmp(self $other): int
    {
        $X1 = $this->getX();
        $Y1 = $this->getY();
        $Z1 = $this->getZ();

        $X2 = $other->getX();
        $Y2 = $other->getY();
        $Z2 = $other->getZ();

        $Z1Z1 = $this->mod(gmp_pow($Z1, 2));
        $Z2Z2 = $this->mod(gmp_pow($Z2, 2));

        $U1 = $this->mod(gmp_mul($X1, $Z2Z2));
        $U2 = $this->mod(gmp_mul($X2, $Z1Z1));

        $S1 = $this->mod(gmp_mul(gmp_mul($Y1, $Z2), $Z2Z2));
        $S2 = $this->mod(gmp_mul(gmp_mul($Y2, $Z1), $Z1Z1));

        if (gmp_cmp($U1, $U2) === 0 && gmp_cmp($S1, $S2) === 0) {
            return 0;
        }

        return 1;
    }

    /**
     * Verify that two Jacobian Points are Equal.
     */
    public function equals(self $other): bool
    {
        return $this->cmp($other) === 0;
    }

    /** Based on Hal Finney's Implementation of an Optimized ECDSA verification,
     * based on the "Guide to Elliptic Curve Cryptography" by Hankerson,
     * Found here: https://bitcointalk.org/index.php?topic=3238.msg45565#msg45565
     * (Necessary factors in splitting k into k1 and k2).
     */
    public function divNearest(GMP $a, GMP $b): GMP
    {
        return gmp_div_q(gmp_add($a, gmp_div_q($b, 2)), $b);
    }

    /**
     * Algorithm for Adding 2 Jacobian Points together, only when the curve's a parameter is 0,
     * (Cannot be used for other curves where a != 0),
     * Based on: http://hyperelliptic.org/EFD/g1p/auto-shortw-jacobian-0.html#addition-add-1998-cmo-2.
     */
    public function add(self $other): self
    {
        $x1 = $this->getX();
        $y1 = $this->getY();
        $z1 = $this->getZ();

        $x2 = $other->getX();
        $y2 = $other->getY();
        $z2 = $other->getZ();

        if (gmp_cmp($x2, 0) === 0 || gmp_cmp($y2, 0) === 0) {
            return $this;
        }

        if (gmp_cmp($x1, 0) === 0 || gmp_cmp($y1, 0) === 0) {
            return $other;
        }

        $z1z1 = $this->mod(gmp_mul($z1, $z1));
        $z2z2 = $this->mod(gmp_mul($z2, $z2));

        $u1 = $this->mod(gmp_mul($x1, $z2z2));
        $u2 = $this->mod(gmp_mul($x2, $z1z1));

        $s1 = $this->mod(gmp_mul($z2z2, $this->mod(gmp_mul($y1, $z2))));
        $s2 = $this->mod(gmp_mul($z1z1, $this->mod(gmp_mul($y2, $z1))));

        $H = $this->mod(gmp_sub($u2, $u1));
        $r = $this->mod(gmp_sub($s2, $s1));

        if (gmp_cmp($H, 0) === 0) {
            if (gmp_cmp($r, 0) === 0) {
                return $this->double();
            }

            return $this->getZero();
        }

        $HH  = $this->mod(gmp_mul($H, $H));
        $HHH = $this->mod(gmp_mul($HH, $H));
        $V   = $this->mod(gmp_mul($u1, $HH));

        // (r * r) - HHH - (2 * V)
        $x3 = $this->mod(
            gmp_sub(
                gmp_sub(
                    gmp_mul($r, $r),
                    $HHH
                ),
                gmp_mul(2, $V)
            )
        );

        // r * (V - x3) - (s1 * HHH)
        $y3 = $this->mod(gmp_sub(
            gmp_mul($r, gmp_sub($V, $x3)),
            gmp_mul($s1, $HHH)
        ));

        // z1 * z2 * H
        $z3 = $this->mod(gmp_mul(gmp_mul($z1, $z2), $H));

        return new self($x3, $y3, $z3);
    }

    /**
     * Split 256-bit K into 2 128-bit (k1, k2) integers for which k1 + k2 * lambda = K.
     * Split Scalar Endomorphism.
     */
    public function splitScalarEndo(GMP $verifyModNumber): array
    {
        $curveN    = gmp_init(self::CURVE_N, 16);
        $a1        = gmp_init(self::HF_A1, 16);
        $b1        = gmp_neg(gmp_init(self::HF_B1, 16));
        $a2        = gmp_init(self::HF_A2, 16);
        $b2        = gmp_init(self::HF_B2, 16);
        $POW_2_128 = gmp_init(self::HFPOW_2_128, 16);

        $c1 = $this->divNearest(gmp_mul($b2, $verifyModNumber), $curveN);
        $c2 = $this->divNearest(gmp_neg(gmp_mul($b1, $verifyModNumber)), $curveN);

        // k - (c1 * a1) - (c2 * a2)
        $k1 = $this->mod(gmp_sub(
            gmp_sub($verifyModNumber, gmp_mul($c1, $a1)),
            gmp_mul($c2, $a2)
        ), $curveN);

        // (-c1 * b1) - (c2 * b2)
        $k2 = $this->mod(gmp_sub(
            gmp_mul(gmp_neg($c1), $b1),
            gmp_mul($c2, $b2)
        ), $curveN);

        $k1Neg = gmp_cmp($k1, $POW_2_128) > 0;
        $k2Neg = gmp_cmp($k2, $POW_2_128) > 0;

        if ($k1Neg) {
            $k1 = gmp_sub($curveN, $k1);
        }

        if ($k2Neg) {
            $k2 = gmp_sub($curveN, $k2);
        }

        return [
            'k1Neg' => $k1Neg,
            'k1'    => $k1,
            'k2Neg' => $k2Neg,
            'k2'    => $k2,
        ];
    }

    /**
     * Implement w-ary non-adjacent form (wNAF) for calculating elliptic curve multiplication.
     *
     * @param GMP $n
     * @param Point $affinePoint
     * @return array
     */
    public function wNAF(GMP $n, Point $affinePoint): array
    {
        if ($affinePoint === null && $this->equals($this->getBase())) {
            $affinePoint = $this->getBasePoint();
        }

        $W = $affinePoint->getWindowSize() ?? 1;
        if (256 % $W !== 0) {
            throw new PointException('Window size must divide 256');
        }

        $precomputes = $this->precomputeWindow($affinePoint->getWindowSize());

        $precomputes = array_map(function ($point) {
            return $point->toAffine();
        }, $precomputes);

        $p = $this->getZero();
        $f = $this->getZero();

        $windows = 1 + 128 / $W;

        $windowSize = 2 ** ($W - 1);
        $mask       = gmp_init(2 ** $W - 1, 10);

        $maxNumber = gmp_init(2 ** $W, 10);
        $shiftBy   = $W;

        for ($window = 0; $window < $windows; ++$window) {
            $offset = $window * $windowSize;
            $wbits  = gmp_and($n, $mask);

            $n = $this->shiftRight($n, $shiftBy);

            if (gmp_cmp($wbits, $windowSize) > 0) {
                $wbits = gmp_sub($wbits, $maxNumber);
                $n     = gmp_add($n, 1);
            }

            if (gmp_intval($wbits) === 0) {
                $pr = $precomputes[$offset];

                if ($window % 2) {
                    $pr = $pr->negate();
                }

                $f = $f->add($pr);
            } else {
                $cached = $precomputes[$offset + gmp_intval(gmp_abs($wbits)) - 1];

                if (gmp_intval($wbits) < 0) {
                    $cached = $cached->negate();
                }

                $p = $p->add($cached);
            }
        }

        return [
            'p' => $p,
            'f' => $f,
        ];
    }

    /**
     * Creates a wNAF precomputation window used for caching, (Default window size is 8).
     * This will cache 65,536 points: 256 points for every bit from 0 to 256.
     *
     * @param int $W
     * @return array
     */
    public function precomputeWindow(int $W): array
    {
        $windows = 128 / $W + 1;
        $points  = [];

        $p    = $this;

        for ($window = 0; $window < $windows; ++$window) {
            $base     = $p;
            $points[] = $base;
            for ($i = 1; $i < 2 ** ($W - 1); ++$i) {
                $base = $base->add($p);

                $points[] = $base;
            }

            $p = $base->double();
        }

        return $points;
    }

    /**
     * Uses Double-and-Add algorithm for Multiplication,
     * Unsafe because of exposed private key.
     */
    public function multiplyUnsafe(GMP $scalar): self
    {
        $n = $scalar;

        $P0 = $this->getZero();

        if (gmp_cmp($n, 0) === 0) {
            return $P0;
        }

        if (gmp_cmp($n, 1) === 0) {
            return $this;
        }

        $endo = $this->splitScalarEndo($n);

        $k1p = clone $P0;
        $k2p = clone $P0;

        $d = clone $this;

        while (gmp_cmp($endo['k1'], 0) > 0 || gmp_cmp($endo['k2'], 0) > 0) {
            if (gmp_intval(gmp_and($endo['k1'], 1)) === 1) {
                $k1p = $k1p->add($d);
            }

            if (gmp_intval(gmp_and($endo['k2'], 1)) === 1) {
                $k2p = $k2p->add($d);
            }

            $d = $d->double();

            $endo['k1'] = $this->shiftRight($endo['k1'], 1);
            $endo['k2'] = $this->shiftRight($endo['k2'], 1);
        }

        if ($endo['k1Neg']) {
            $k1p = $k1p->negate();
        }

        if ($endo['k2Neg']) {
            $k2p = $k2p->negate();
        }

        $k2p = new self(
            $this->mod(
                gmp_mul($k2p->getX(), gmp_init(self::CURVE_BETA, 16))
            ),
            $k2p->getY(),
            $k2p->getZ()
        );

        return $k1p->add($k2p);
    }

    /**
     * Multiply two points together.
     *
     * @param GMP $n
     * @param ?JacobianPoint $affinePoint
     * @return self
     */
    public function mul(GMP $n, ?self $affinePoint = null): self
    {
        if ($affinePoint === null) {
            $affinePoint = $this->getBasePoint();
        }

        $endo = $this->splitScalarEndo($n);

        ['p' => $k1p, 'f' => $f1p] = $this->wNAF($endo['k1'], $affinePoint);
        ['p' => $k2p, 'f' => $f2p] = $this->wNAF($endo['k2'], $affinePoint);

        if ($endo['k1Neg']) {
            $k1p = $k1p->negate();
        }

        if ($endo['k2Neg']) {
            $k2p = $k2p->negate();
        }

        $k2p = new self(
            $this->mod(gmp_mul($k2p->getX(), gmp_init(self::CURVE_BETA, 16))),
            $k2p->getY(),
            $k2p->getZ()
        );

        $point = $k1p->add($k2p);
        $fake  = $f1p->add($f2p);

        return array_map(function ($p) {
            return $p->toAffine();
        }, [$point, $fake])[0];
    }

    /**
     * Perform efficient double scalar multiplications of aP + bQ,
     * Naive way as opposed to Strauss-Shamir's trick:
     *     Perform two multiplications of aP and bQ, then add them together,
     * (Unsafe based on exposed Private Key).
     *
     * @return bool|JacobianPoint
     */
    public function multiplyAndAddUnsafe(PointInterface $Q, GMP $a, GMP $b)
    {
        $P = $this->getBase();

        if (gmp_cmp($a, 0) === 0 || gmp_cmp($a, 1) === 0 || !$this->equals($P)) {
            $aP = $P->multiplyUnsafe($a);
        } else {
            $aP = $P->mul($a);
        }

        $bS = $P->fromAffine($Q);
        $bQ = $bS->multiplyUnsafe($b);

        $sum = $aP->add($bQ);

        return $sum->equals($this->getZero()) ? false : $sum->toAffine();
    }

    /**
     * Doubles a Jacobian Point when the Curve's A is O,
     * (Does not work when A is not O).
     * Based on: http://hyperelliptic.org/EFD/g1p/auto-shortw-jacobian-0.html#doubling-dbl-2009-l.
     */
    public function double(): self
    {
        $x1 = $this->getX();
        $y1 = $this->getY();
        $z1 = $this->getZ();

        $a = $this->mod(gmp_mul($x1, $x1));
        $b = $this->mod(gmp_mul($y1, $y1));
        $c = $this->mod(gmp_mul($b, $b));

        $x1b = gmp_add($x1, $b);

        // 2 * ((X1 + B)**2 - A - C)
        $D = $this->mod(gmp_mul(2, gmp_sub(gmp_sub($this->mod(gmp_mul($x1b, $x1b)), $a), $c)));
        $E = $this->mod(gmp_mul(3, $a));
        $F = $this->mod(gmp_mul($E, $E));

        // F - 2 * D
        $X3 = $this->mod(gmp_sub($F, gmp_mul(2, $D)));

        // E * (D - X3) - (8 * C)
        $Y3 = $this->mod(gmp_sub(gmp_mul($E, gmp_sub($D, $X3)), gmp_mul(8, $c)));

        // 2 * Y1 * Z1
        $Z3 = $this->mod(gmp_mul(2, gmp_mul($y1, $z1)));

        return new self($X3, $Y3, $Z3);
    }

    /**
     * @see PointInterface::__toString
     */
    public function __toString(): string
    {
        return '[ (' . gmp_strval($this->x) . ', ' . gmp_strval($this->y) . ', ' . gmp_strval($this->z) . ') ]';
    }

    public function __debugInfo(): array
    {
        return [
            'x' => gmp_strval($this->x),
            'y' => gmp_strval($this->y),
            'z' => gmp_strval($this->z),
        ];
    }
}
