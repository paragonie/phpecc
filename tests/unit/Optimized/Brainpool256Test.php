<?php
declare(strict_types=1);
namespace Mdanter\Ecc\Tests\Optimized;

use GMP;
use Mdanter\Ecc\Curves\BrainpoolCurve;
use Mdanter\Ecc\Curves\CurveFactory;
use Mdanter\Ecc\Math\ConstantTimeMath;
use Mdanter\Ecc\Optimized\Common\JacobiPoint;
use Mdanter\Ecc\Optimized\BP256;
use Mdanter\Ecc\Primitives\Point;
use Mdanter\Ecc\Tests\AbstractTestCase;

class Brainpool256Test extends AbstractTestCase
{
    /** @var BP256 $bp256 */
    private $bp256;

    /** @var GMP $prime */
    private $prime;

    /** @var GMP $order */
    private $order;

    public function setUp(): void
    {
        parent::setUp();
        $this->bp256 = new BP256();
        $this->prime = gmp_init('0xA9FB57DBA1EEA9BC3E660A909D838D726E3BF623D52620282013481D1F6E5377', 16);
        $this->order = gmp_init('0xA9FB57DBA1EEA9BC3E660A909D838D718C397AA3B561A6F7901E0E82974856A7', 16);
    }

    public function testAddPoint(): void
    {
        $p1 = $this->getGenerator();
        $p2 = new JacobiPoint();
        $p2->x = gmp_init('0x7cf27b188d034f7e8a52380304b51ac3c08969e277f21b35a60b48fc47669978', 16);
        $p2->y = gmp_init('0x7775510db8ed040293d9ac69f7430dbba7dade63ce982299e04b79d227873d1', 16);;
        $p2->z = gmp_init(1);
        $added = $this->bp256->addInternal($p1, $p2);
        $affine = $this->bp256->jacobiToAffine($added);

        $expectX = gmp_init('0x62dbfa5b119c6c94d034c8f514977457e29e4ea6e3298932a66c81950bce1374', 16);
        $expectY = gmp_init('0x5e8b4b4165e0e1f06c21b71c14fd18bdb9352254239f5a420ffdb72100c5a409', 16);

        $this->assertGMPSame($expectX, $affine->x, 'x differs');
        $this->assertGMPSame($expectY, $affine->y, 'y differs');
    }

    private function getGenerator(): JacobiPoint
    {
        $p = new JacobiPoint();
        /** @var GMP $x */
        $x = gmp_init('0x8BD2AEB9CB7E57CB2C4B482FFC81B7AFB9DE27E1E3BD23C23A4453BD9ACE3262', 16);
        /** @var GMP $y */
        $y = gmp_init('0x547EF835C3DAC4FD97F8461A14611DC9C27745132DED8E545C1D54C72F046997', 16);
        /** @var GMP $z */
        $z = gmp_init(1);

        $p->x = $x;
        $p->y = $y;
        $p->z = $z;
        return $p;
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

        $affine = $this->bp256->jacobiToAffine($in);
        $this->assertGMPSame($expectX, $affine->x, 'x differs');
        $this->assertGMPSame($expectY, $affine->y, 'y differs');
    }

    /**
     * @dataProvider scalarMultBaseProvider
     */
    public function testScalarMultBase(GMP $scalar, GMP $expectX, GMP $expectY): void
    {
        $point = $this->bp256->scalarMultBase($scalar);

        $this->assertGMPSame($expectX, $point->getX());
        $this->assertGMPSame($expectY, $point->getY());
    }

    /**
     * @dataProvider scalarMultProvider
     */
    public function testScalarMult(GMP $k, GMP $xIn, GMP $yIn, GMP $xOut, GMP $yOut): void
    {
        $curve = CurveFactory::getCurveByName(BrainpoolCurve::NAME_P256R1);
        $point = new Point(
            new ConstantTimeMath(),
            $curve,
            $xIn,
            $yIn,
            clone $this->order
        );

        $out = $this->bp256->scalarMult($k, $point);
        $this->assertGMPSame($xOut, $out->getX());
        $this->assertGMPSame($yOut, $out->getY());
    }

    /**
     * @dataProvider addProvider
     */
    public function testAddElements(GMP $e, GMP $f): void
    {
        $x1 = gmp_mod(gmp_add($e, $f), $this->prime);
        $x2 = $this->bp256->addElements($e, $f, true);

        // Ensure we get what we expect:
        $this->assertGMPSame($x1, $x2);
    }

    /**
     * @dataProvider mulProvider
     */
    public function testMulElements(GMP $a, GMP $b): void
    {
        $c = gmp_mod($a * $b, $this->prime);
        $d = $this->bp256->mulElements($a, $b);
        $this->assertGMPSame($c, $d);
    }

    /**
     * @dataProvider subProvider
     */
    public function testSubElements(GMP $e, GMP $f): void
    {
        $x1 = gmp_mod(gmp_sub($e, $f), $this->prime);
        $y1 = gmp_mod(gmp_sub($f, $e), $this->prime);
        $x2 = $this->bp256->subElements($e, $f);
        $y2 = $this->bp256->subElements($f, $e);

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
                gmp_init('a8' . bin2hex(random_bytes(31)), 16),
                gmp_init('a8' . bin2hex(random_bytes(31)), 16)
            ],
            [
                gmp_mod(gmp_init(bin2hex(random_bytes(32)), 16), $this->prime),
                gmp_mod(gmp_init(bin2hex(random_bytes(32)), 16), $this->prime)
            ],
        ];
    }

    public function scalarMultBaseProvider(): array
    {
        return [
            [
                gmp_init(1),
                gmp_init('0x8BD2AEB9CB7E57CB2C4B482FFC81B7AFB9DE27E1E3BD23C23A4453BD9ACE3262', 16),
                gmp_init('0x547EF835C3DAC4FD97F8461A14611DC9C27745132DED8E545C1D54C72F046997', 16)
            ],
            [
                gmp_init(2),
                gmp_init('0x743cf1b8b5cd4f2eb55f8aa369593ac436ef044166699e37d51a14c2ce13ea0e', 16),
                gmp_init('0x36ed163337deba9c946fe0bb776529da38df059f69249406892ada097eeb7cd4', 16)
            ],
            [
                gmp_init(3),
                gmp_init('0xa8f217b77338f1d4d6624c3ab4f6cc16d2aa843d0c0fca016b91e2ad25cae39d', 16),
                gmp_init('0x4b49cafc7dac26bb0aa2a6850a1b40f5fac10e4589348fb77e65cc5602b74f9d', 16)
            ],
            [
                gmp_init(4),
                gmp_init('0x3672030bace787aa319e21d40645b2999006beec437fd084dd3fc592f5fcd77c', 16),
                gmp_init('0x335b226ce5fac0c36a18ce42e95f43c9eed3e256bdd0c98e55a069595515d15b', 16)
            ],
            [
                gmp_init(10),
                gmp_init('0xa4348db079f7ffbcfb3dfc35bd8ac67c22a85a50025cb1f37a22ba81728b1caf', 16),
                gmp_init('0x2444fa0f5b79be1a2bd1d073c38fd136c77977f417b550d954e46dc4c8b737c1', 16)
            ],
            [
                gmp_init(100),
                gmp_init('0x09a8755eac4fd597412605ed57c5130463ea74444843cce26de6c131827a0ebf', 16),
                gmp_init('0x7fba8949f72fd5aba616c78eac619fc11099eabe1ac89f5f6225a293a3916f72', 16)
            ],
            [
                gmp_init('112233445566778899'),
                gmp_init('0x691024597ea13dc03314771dd794e6d2f50aeb49335d3b03e21b5923c29b9d5c', 16),
                gmp_init('0x3d313de6241323a266524fcbff2658ff2495f46017fcc84f8c9d4c14d8d27917', 16)
            ]
        ];
    }

    public function scalarMultProvider(): array
    {
        return [
            /* RFC 6932 */
            [
                gmp_init("0x041EB8B1E2BC681BCE8E39963B2E9FC415B05283313DD1A8BCC055F11AE49699", 16),
                gmp_init("0x8E07E219BA588916C5B06AA30A2F464C2F2ACFC1610A3BE2FB240B635341F0DB", 16),
                gmp_init("0x148EA1D7D1E7E54B9555B6C9AC90629C18B63BEE5D7AA6949EBBF47B24FDE40D", 16),
                gmp_init('0x05E940915549E9F6A4A75693716E37466ABA79B4BF2919877A16DD2CC2E23708', 16),
                gmp_init('0x6BC23B6702BC5A019438CEEA107DAAD8B94232FFBBC350F3B137628FE6FD134C', 16)
            ],
            [
                gmp_init("0x06F5240EACDB9837BC96D48274C8AA834B6C87BA9CC3EEDD81F99A16B8D804D3", 16),
                gmp_init("0x78028496B5ECAAB3C8B6C12E45DB1E02C9E4D26B4113BC4F015F60C5CCC0D206", 16),
                gmp_init("0xA2AE1762A3831C1D20F03F8D1E3C0C39AFE6F09B4D44BBE80CD100987B05F92B", 16),
                gmp_init('0x05E940915549E9F6A4A75693716E37466ABA79B4BF2919877A16DD2CC2E23708', 16),
                gmp_init('0x6BC23B6702BC5A019438CEEA107DAAD8B94232FFBBC350F3B137628FE6FD134C', 16)
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
                gmp_init('a97011f03eb79df378aaf02208c0195631fda724e0fdbe68d9d7801b16411897', 16),
                gmp_init('6d694445f1eaff30c6d0053c72f424d3550e344c9fd160bfd32dcbe35179d752', 16)
            ]
        ];
    }
}
