<?php
declare(strict_types=1);

namespace Mdanter\Ecc\Tests\Optimized;

use GMP;
use Mdanter\Ecc\Curves\CurveFactory;
use Mdanter\Ecc\Curves\NistCurve;
use Mdanter\Ecc\Math\ConstantTimeMath;
use Mdanter\Ecc\Optimized\Common\JacobiPoint;
use Mdanter\Ecc\Optimized\P256;
use Mdanter\Ecc\Primitives\Point;
use Mdanter\Ecc\Tests\AbstractTestCase;

class P256Test extends AbstractTestCase
{
    /** @var P256 $p256 */
    private $p256;

    /** @var GMP $prime */
    private $prime;

    public function setUp(): void
    {
        parent::setUp();
        $this->p256 = new P256();
        $this->prime = gmp_init('0xffffffff00000001000000000000000000000000ffffffffffffffffffffffff', 16);
        $this->order = gmp_init('0xffffffff00000000ffffffffffffffffbce6faada7179e84f3b9cac2fc632551', 16);
    }

    public function testAddPoint(): void
    {
        $p1 = $this->getGenerator();
        $p2 = new JacobiPoint();
        $p2->x = gmp_init('0x7cf27b188d034f7e8a52380304b51ac3c08969e277f21b35a60b48fc47669978', 16);
        $p2->y = gmp_init('0x7775510db8ed040293d9ac69f7430dbba7dade63ce982299e04b79d227873d1', 16);;
        $p2->z = gmp_init(1);
        $added = $this->p256->addInternal($p1, $p2);
        $affine = $this->p256->jacobiToAffine($added);

        $expectX = gmp_init('0x5ecbe4d1a6330a44c8f7ef951d4bf165e6c6b721efada985fb41661bc6e7fd6c', 16);
        $expectY = gmp_init('0x8734640c4998ff7e374b06ce1a64a2ecd82ab036384fb83d9a79b127a27d5032', 16);

        $this->assertGMPSame($expectX, $affine->x, 'x differs');
        $this->assertGMPSame($expectY, $affine->y, 'y differs');
    }

    private function getGenerator(): JacobiPoint
    {
        $p = new JacobiPoint();
        /** @var GMP $x */
        $x = gmp_init('0x6b17d1f2e12c4247f8bce6e563a440f277037d812deb33a0f4a13945d898c296', 16);
        /** @var GMP $y */
        $y = gmp_init('0x4fe342e2fe1a7f9b8ee7eb4a7c0f9e162bce33576b315ececbb6406837bf51f5', 16);
        /** @var GMP $z */
        $z = gmp_init(1);

        $p->x = $x;
        $p->y = $y;
        $p->z = $z;
        return $p;
    }

    public function testDoublePoint(): void
    {
        $g = $this->getGenerator();
        $g2 = $this->p256->addInternal(clone $g, clone $g);
        $dbl = $this->p256->doubleInternal($g);

        $this->assertGMPSame($g2->x, $dbl->x, 'x differs (g+g vs 2g)');
        $this->assertGMPSame($g2->y, $dbl->y, 'y differs (g+g vs 2g)');
        $this->assertGMPSame($g2->z, $dbl->z, 'z differs (g+g vs 2g)');

        $g2 = $this->p256->jacobiToAffine($g2);
        $dbl = $this->p256->jacobiToAffine($dbl);

        $this->assertGMPSame($g2->x, $dbl->x, 'x differs (g+g vs 2g)');
        $this->assertGMPSame($g2->y, $dbl->y, 'y differs (g+g vs 2g)');

        /*
        $expectX = gmp_init('0x2e266b2f20e364762d87ade1cf5657d3f10d2d48a235a9aa74b00bf91aeb7e16', 16);
        $expectY = gmp_init('0x881f89d798da41a6abbcea4c3023a314225f973c2c9672a3e874649cf6a67d8e', 16);

        $this->assertGMPSame($expectX, $dbl->x, 'x differs');
        $this->assertGMPSame($expectY, $dbl->y, 'y differs');
        */

        $affine = $dbl;

        $expectX = gmp_init('0x7cf27b188d034f7e8a52380304b51ac3c08969e277f21b35a60b48fc47669978', 16);
        $expectY = gmp_init('0x07775510db8ed040293d9ac69f7430dbba7dade63ce982299e04b79d227873d1', 16);

        $this->assertGMPSame($expectX, $affine->x, 'x differs');
        $this->assertGMPSame($expectY, $affine->y, 'y differs');
    }


    /**
     * @dataProvider jacobiToAffineProvider
     * @return void
     */
    public function testJacobiToAffine(
        GMP $inX,
        GMP $inY,
        GMP $inZ,
        GMP $expectX,
        GMP $expectY
    ): void {
        $in = new JacobiPoint();
        $in->x = clone $inX;
        $in->y = clone $inY;
        $in->z = clone $inZ;

        $affine = $this->p256->jacobiToAffine($in);
        $this->assertGMPSame($expectX, $affine->x, 'x differs');
        $this->assertGMPSame($expectY, $affine->y, 'y differs');
    }

    /**
     * @dataProvider scalarMultBaseProvider
     */
    public function testScalarMultBase(GMP $scalar, GMP $expectX, GMP $expectY): void
    {
        $point = $this->p256->scalarMultBase($scalar);

        $this->assertGMPSame($expectX, $point->getX());
        $this->assertGMPSame($expectY, $point->getY());
    }

    /**
     * @dataProvider scalarMultProvider
     */
    public function testScalarMult(GMP $k, GMP $xIn, GMP $yIn, GMP $xOut, GMP $yOut): void
    {
        $curve = CurveFactory::getCurveByName(NistCurve::NAME_P256);
        $point = new Point(
            new ConstantTimeMath(),
            $curve,
            $xIn,
            $yIn,
            clone $this->order
        );

        $out = $this->p256->scalarMult($k, $point);
        $this->assertGMPSame($xOut, $out->getX());
        $this->assertGMPSame($yOut, $out->getY());
    }

    /**
     * @dataProvider addProvider
     */
    public function testAddElements(GMP $e, GMP $f): void
    {
        $x1 = gmp_mod(gmp_add($e, $f), $this->prime);
        $x2 = $this->p256->addElements($e, $f, true);

        // Ensure we get what we expect:
        $this->assertGMPSame($x1, $x2);
    }

    /**
     * @dataProvider mulProvider
     */
    public function testMulElements(GMP $a, GMP $b): void
    {
        $c = gmp_mod($a * $b, $this->prime);
        $d = $this->p256->mulElements($a, $b);
        $this->assertGMPSame($c, $d);
    }

    /**
     * @dataProvider subProvider
     */
    public function testSubElements(GMP $e, GMP $f): void
    {
        $x1 = gmp_mod(gmp_sub($e, $f), $this->prime);
        $y1 = gmp_mod(gmp_sub($f, $e), $this->prime);
        $x2 = $this->p256->subElements($e, $f);
        $y2 = $this->p256->subElements($f, $e);

        // Ensure we get what we expect:
        $this->assertGMPSame($x1, $x2);
        $this->assertGMPSame($y1, $y2);

        // Catch false positives and arithmetic errors:
        $this->assertGMPNotSame($x1, $y1);
        $this->assertGMPNotSame($x2, $y2);
        $this->assertGMPNotSame($x1, $y2);
        $this->assertGMPNotSame($x2, $y1);
    }

    public function addProvider(): array
    {
        if (!isset($this->prime)) $this->setUp();
        return [
            [
                gmp_init(random_int(1, 100000), 10),
                gmp_sub($this->prime, gmp_init(1, 10))
            ],
            [
                gmp_sub($this->prime, gmp_init(1, 10)),
                gmp_sub($this->prime, gmp_init(1, 10)),
            ],
            [
                gmp_init(random_int(1, 100000), 10),
                gmp_init(bin2hex(random_bytes(31)), 16)
            ],
            [
                gmp_init('fe' . bin2hex(random_bytes(31)), 16),
                gmp_init('fe' . bin2hex(random_bytes(31)), 16)
            ],
            [
                gmp_init(bin2hex(random_bytes(32)), 16),
                gmp_init(bin2hex(random_bytes(32)), 16)
            ],
        ];
    }

    public function mulProvider(): array
    {
        if (!isset($this->prime)) $this->setUp();
        return [
            [
                gmp_init(333, 10),
                gmp_init(2024, 10),
            ],
            [
                gmp_init(random_int(1, 100000), 10),
                gmp_init(bin2hex(random_bytes(31)), 16)
            ],
            [
                $this->prime - gmp_init(3, 10),
                gmp_init(5, 10)
            ],
            [
                gmp_init(random_int(1, 100000), 10),
                $this->prime - gmp_init(random_int(1, 100000))
            ],
            [
                gmp_init('fe' . bin2hex(random_bytes(31)), 16),
                gmp_init('fe' . bin2hex(random_bytes(31)), 16)
            ],
            [
                $this->prime - gmp_init(random_int(100, 100000)),
                $this->prime - gmp_init(random_int(100, 100000))
            ],
            [
                gmp_init(bin2hex(random_bytes(32)), 16),
                gmp_init(bin2hex(random_bytes(32)), 16)
            ],
        ];
    }

    public function subProvider(): array
    {
        if (!isset($this->prime)) $this->setUp();
        return [
            [
                gmp_init(random_int(1, 100000), 10),
                gmp_sub($this->prime, gmp_init(1, 10))
            ],
            [
                gmp_sub($this->prime, gmp_init(1, 10)),
                gmp_sub($this->prime, gmp_init(2, 10)),
            ],
            [
                gmp_init(random_int(1, 100000), 10),
                gmp_init(bin2hex(random_bytes(15)), 16)
            ],
            [
                gmp_init('fe' . bin2hex(random_bytes(15)), 16),
                gmp_init('fe' . bin2hex(random_bytes(15)), 16)
            ],
            [
                gmp_init(bin2hex(random_bytes(16)), 16),
                gmp_init(bin2hex(random_bytes(16)), 16)
            ],
        ];
    }

    public function scalarMultBaseProvider(): array
    {
        return [
            [
                gmp_init(1),
                gmp_init('0x6b17d1f2e12c4247f8bce6e563a440f277037d812deb33a0f4a13945d898c296', 16),
                gmp_init('0x4fe342e2fe1a7f9b8ee7eb4a7c0f9e162bce33576b315ececbb6406837bf51f5', 16)
            ],
            [
                gmp_init(2),
                gmp_init('0x7cf27b188d034f7e8a52380304b51ac3c08969e277f21b35a60b48fc47669978', 16),
                gmp_init('0x07775510db8ed040293d9ac69f7430dbba7dade63ce982299e04b79d227873d1', 16)
            ],
            [
                gmp_init(3),
                gmp_init('0x5ecbe4d1a6330a44c8f7ef951d4bf165e6c6b721efada985fb41661bc6e7fd6c', 16),
                gmp_init('0x8734640c4998ff7e374b06ce1a64a2ecd82ab036384fb83d9a79b127a27d5032', 16)
            ],
            [
                gmp_init(4),
                gmp_init('0xe2534a3532d08fbba02dde659ee62bd0031fe2db785596ef509302446b030852', 16),
                gmp_init('0xe0f1575a4c633cc719dfee5fda862d764efc96c3f30ee0055c42c23f184ed8c6', 16)
            ],
            [
                gmp_init(1000000),
                gmp_init('0xc5b222271bc42f0bcfadfe338b7f38062022f3ee82f2d0aa3726cbbd30aedc6c', 16),
                gmp_init('0x942aef454829994b6c5ee673f19803d289d898107edbce02b65886dd1094dc47', 16)
            ]
        ];
    }

    public function scalarMultProvider(): array
    {
        return [
            [
                gmp_init("2a265f8bcbdcaf94d58519141e578124cb40d64a501fba9c11847b28965bc737", 16),
                gmp_init("023819813ac969847059028ea88a1f30dfbcde03fc791d3a252c6b41211882ea", 16),
                gmp_init("f93e4ae433cc12cf2a43fc0ef26400c0e125508224cdb649380f25479148a4ad", 16),
                gmp_init("4d4de80f1534850d261075997e3049321a0864082d24a917863366c0724f5ae3", 16),
                gmp_init("a22d2b7f7818a3563e0f7a76c9bf0921ac55e06e2e4d11795b233824b1db8cc0", 16)
            ],
            [
                gmp_init("313f72ff9fe811bf573176231b286a3bdb6f1b14e05c40146590727a71c3bccd", 16),
                gmp_init("cc11887b2d66cbae8f4d306627192522932146b42f01d3c6f92bd5c8ba739b06", 16),
                gmp_init("a2f08a029cd06b46183085bae9248b0ed15b70280c7ef13a457f5af382426031", 16),
                gmp_init("831c3f6b5f762d2f461901577af41354ac5f228c2591f84f8a6e51e2e3f17991", 16),
                gmp_init("93f90934cd0ef2c698cc471c60a93524e87ab31ca2412252337f364513e43684", 16)
            ]
        ];
    }

    public function jacobiToAffineProvider(): array
    {
        return [
            [
                gmp_init("69923961955967387994258645329874512676251231789611885617885350872868369909519"),
                gmp_init("29468416531536242154810423193772930342200868632530199947817229236472112149969"),
                gmp_init("72268501913499591597170255839175763913222213345970030143754396507136828810218"),
                gmp_init('f90eae1c994bded3dc74b5d97fab8ea4784259406f318145f226e3f8db256494', 16),
                gmp_init('cec9c0d93c1e33ab310781e25dc7d7a53cdc3091a4ee524b901a857be8eba80f', 16)
            ]
        ];
    }
}
