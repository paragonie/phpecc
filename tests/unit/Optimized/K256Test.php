<?php
declare(strict_types=1);

namespace Mdanter\Ecc\Tests\Optimized;

use GMP;
use Mdanter\Ecc\Curves\CurveFactory;
use Mdanter\Ecc\Curves\SecgCurve;
use Mdanter\Ecc\Math\ConstantTimeMath;
use Mdanter\Ecc\Optimized\Common\JacobiPoint;
use Mdanter\Ecc\Optimized\K256;
use Mdanter\Ecc\Primitives\Point;
use Mdanter\Ecc\Tests\AbstractTestCase;

class K256Test extends AbstractTestCase
{
    /** @var K256 $k256 */
    private $k256;

    /** @var GMP $prime */
    private $prime;

    public function setUp(): void
    {
        parent::setUp();
        $this->k256 = new K256();
        $this->prime = gmp_init('0xFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFEFFFFFC2F', 16);
        $this->order = gmp_init('0xFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFEBAAEDCE6AF48A03BBFD25E8CD0364141', 16);
    }

    public function testAddPoint(): void
    {
        $p1 = $this->getGenerator();
        $p1p1 = $this->k256->addInternal($p1, $p1);
        $aff = $this->k256->jacobiToAffine($p1p1);

        $p2 = JacobiPoint::init(
            gmp_init('0xC6047F9441ED7D6D3045406E95C07CD85C778E4B8CEF3CA7ABAC09B95C709EE5', 16),
            gmp_init('0x1AE168FEA63DC339A3C58419466CEAEEF7F632653266D0E1236431A950CFE52A', 16),
            gmp_init(1)
        );

        $this->assertGMPSame($p2->x, $aff->x, "x differs");
        $this->assertGMPSame($p2->y, $aff->y, 'y differs');

        $added = $this->k256->jacobiToAffine($this->k256->addInternal($p1, $p2));
        $expectX = gmp_init('0xF9308A019258C31049344F85F89D5229B531C845836F99B08601F113BCE036F9', 16);
        $expectY = gmp_init('0x388F7B0F632DE8140FE337E62A37F3566500A99934C2231B6CB9FD7584B8E672', 16);
        $this->assertGMPSame($expectX, $added->x);
        $this->assertGMPSame($expectY, $added->y);
    }

    public function testAddDoubleEquivalent(): void
    {
        $p1 = $this->getGenerator();

        $p2 = $this->k256->addInternal($p1, $p1);
        $p2b = $this->k256->doubleInternal($p1);
        $this->assertPointsSame($p2, $p2b, 'p2');

        $p4 = $this->k256->addInternal($p2, $p2);
        $p4b = $this->k256->doubleInternal($p2);
        $this->assertPointsSame($p4, $p4b, 'p4');

        $p8 = $this->k256->addInternal($p4, $p4);
        $p8b = $this->k256->doubleInternal($p4);
        $this->assertPointsSame($p8, $p8b, 'p8');

        $p16 = $this->k256->addInternal($p8, $p8);
        $p16b = $this->k256->doubleInternal($p8);
        $this->assertPointsSame($p16, $p16b, 'p16');

        // Now let's test a non-multiple of 2
        $p3 = $this->k256->addInternal($p1, $p2);
        $p3b = $this->k256->addInternal($p1, $p2);
        $this->assertPointsSame($p3, $p3b, 'p3');
        $p6 = $this->k256->addInternal($p2, $p4);
        $p6b = $this->k256->doubleInternal($p3);
        $this->assertPointsSame($p6, $p6b, 'p6');
    }

    protected function assertPointsSame(JacobiPoint $p1, JacobiPoint $p2, string $comment = ''): void
    {
        $a1 = $this->k256->jacobiToAffine($p1);
        $a2 = $this->k256->jacobiToAffine($p2);
        if (gmp_cmp($a1->x, $a2->x) !== 0) {
            var_dump($p1, $p2, $a1, $a2);
        }
        $this->assertGMPSame($a1->x, $a2->x, $comment . ' - X coordinate');
        $this->assertGMPSame($a1->y, $a2->y, $comment . ' - Y coordinate');
    }

    public function testDoublePoint(): void
    {
        $g = $this->getGenerator();
        $g2 = $this->k256->addInternal(clone $g, clone $g);
        $dbl = $this->k256->doubleInternal($g);

        $this->assertGMPSame($g2->x, $dbl->x, 'x differs (g+g vs 2g)');
        $this->assertGMPSame($g2->y, $dbl->y, 'y differs (g+g vs 2g)');
        $this->assertGMPSame($g2->z, $dbl->z, 'z differs (g+g vs 2g)');

        $g2 = $this->k256->jacobiToAffine($g2);
        $dbl = $this->k256->jacobiToAffine($dbl);

        $this->assertGMPSame($g2->x, $dbl->x, 'x differs (g+g vs 2g)');
        $this->assertGMPSame($g2->y, $dbl->y, 'y differs (g+g vs 2g)');

        $expectX = gmp_init('0xC6047F9441ED7D6D3045406E95C07CD85C778E4B8CEF3CA7ABAC09B95C709EE5', 16);
        $expectY = gmp_init('0x1AE168FEA63DC339A3C58419466CEAEEF7F632653266D0E1236431A950CFE52A', 16);
        $this->assertGMPSame($expectX, $dbl->x);
        $this->assertGMPSame($expectY, $dbl->y);
    }

    /**
     * @dataProvider scalarMultProvider
     */
    public function testScalarMult(GMP $k, GMP $xIn, GMP $yIn, GMP $xOut, GMP $yOut): void
    {
        if (!isset($this->prime)) $this->setUp();
        $curve = CurveFactory::getCurveByName(SecgCurve::NAME_SECP_256K1);
        $point = new Point(
            new ConstantTimeMath(),
            $curve,
            $xIn,
            $yIn,
            clone $this->order
        );

        $out = $this->k256->scalarMult($k, $point);
        $this->assertGMPSame($xOut, $out->getX());
        $this->assertGMPSame($yOut, $out->getY());
    }

    /**
     * @dataProvider scalarMultBaseProvider
     */
    public function testScalarMultBase(GMP $scalar, GMP $expectX, GMP $expectY): void
    {
        if (!isset($this->prime)) $this->setUp();
        $point = $this->k256->scalarMultBase($scalar);

        $this->assertGMPSame($expectX, $point->getX(), 'X');
        $this->assertGMPSame($expectY, $point->getY(), 'Y');
    }

    /**
     * @dataProvider addProvider
     */
    public function testAddElements(GMP $e, GMP $f): void
    {
        $x1 = gmp_mod(gmp_add($e, $f), $this->prime);
        $x2 = $this->k256->addElements($e, $f, true);

        // Ensure we get what we expect:
        $this->assertGMPSame($x1, $x2);
    }

    /**
     * @dataProvider mulProvider
     */
    public function testMulElements(GMP $a, GMP $b): void
    {
        $c = gmp_mod($a * $b, $this->prime);
        $d = $this->k256->mulElements($a, $b);
        $this->assertGMPSame($c, $d);
    }

    /**
     * @dataProvider subProvider
     */
    public function testSubElements(GMP $e, GMP $f): void
    {
        $x1 = gmp_mod(gmp_sub($e, $f), $this->prime);
        $y1 = gmp_mod(gmp_sub($f, $e), $this->prime);
        $x2 = $this->k256->subElements($e, $f);
        $y2 = $this->k256->subElements($f, $e);

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
        if (!isset($this->prime)) $this->setUp();
        return [
            [
                gmp_init(1),
                gmp_init('0x79BE667EF9DCBBAC55A06295CE870B07029BFCDB2DCE28D959F2815B16F81798', 16),
                gmp_init('0x483ADA7726A3C4655DA4FBFC0E1108A8FD17B448A68554199C47D08FFB10D4B8', 16)
            ],
            [
                gmp_init(2),
                gmp_init('0xC6047F9441ED7D6D3045406E95C07CD85C778E4B8CEF3CA7ABAC09B95C709EE5', 16),
                gmp_init('0x1AE168FEA63DC339A3C58419466CEAEEF7F632653266D0E1236431A950CFE52A', 16)
            ],
            [
                gmp_init(3),
                gmp_init('0xF9308A019258C31049344F85F89D5229B531C845836F99B08601F113BCE036F9', 16),
                gmp_init('0x388F7B0F632DE8140FE337E62A37F3566500A99934C2231B6CB9FD7584B8E672', 16)
            ],
            [
                gmp_init(4),
                gmp_init('0xE493DBF1C10D80F3581E4904930B1404CC6C13900EE0758474FA94ABE8C4CD13', 16),
                gmp_init('0x51ED993EA0D455B75642E2098EA51448D967AE33BFBDFE40CFE97BDC47739922', 16)
            ],
            [
                gmp_init('112233445566778899'),
                gmp_init('0xA90CC3D3F3E146DAADFC74CA1372207CB4B725AE708CEF713A98EDD73D99EF29', 16),
                gmp_init('0x5A79D6B289610C68BC3B47F3D72F9788A26A06868B4D8E433E1E2AD76FB7DC76', 16)
            ]
        ];
    }

    public function scalarMultProvider(): array
    {
        if (!isset($this->prime)) $this->setUp();
        return [
            [
                gmp_init("2a265f8bcbdcaf94d58519141e578124cb40d64a501fba9c11847b28965bc737", 16),
                gmp_init("79be667ef9dcbbac55a06295ce870b07029bfcdb2dce28d959f2815b16f81798", 16),
                gmp_init("483ada7726a3c4655da4fbfc0e1108a8fd17b448a68554199c47d08ffb10d4b8", 16),
                gmp_init("ee0beb0247ed432cd77ebdd60216299ff64d74526671d96d885c68994caa0604", 16),
                gmp_init("a5046a1d79baf39ae87b31e07b9e6f0ba484bec1d97db5b1dc14b294c51b459a", 16)
            ]
        ];
    }

    private function getGenerator(): JacobiPoint
    {
        /** @var GMP $x */
        $x = gmp_init('0x79BE667EF9DCBBAC55A06295CE870B07029BFCDB2DCE28D959F2815B16F81798', 16);
        /** @var GMP $y */
        $y = gmp_init('0x483ADA7726A3C4655DA4FBFC0E1108A8FD17B448A68554199C47D08FFB10D4B8', 16);
        /** @var GMP $z */
        $z = gmp_init(1);

        return JacobiPoint::init($x, $y, $z);
    }
}
