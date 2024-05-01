<?php
declare(strict_types=1);
namespace Mdanter\Ecc\Tests\Optimized;

use GMP;
use Mdanter\Ecc\Curves\BrainpoolCurve;
use Mdanter\Ecc\Curves\CurveFactory;
use Mdanter\Ecc\Math\ConstantTimeMath;
use Mdanter\Ecc\Optimized\Common\JacobiPoint;
use Mdanter\Ecc\Optimized\BP384;
use Mdanter\Ecc\Primitives\Point;
use Mdanter\Ecc\Tests\AbstractTestCase;

class Brainpool384Test extends AbstractTestCase
{
    /** @var BP384 $bp384 */
    private $bp384;

    /** @var GMP $prime */
    private $prime;

    public function setUp(): void
    {
        parent::setUp();
        $this->bp384 = new BP384();
        $this->prime = gmp_init('0x8CB91E82A3386D280F5D6F7E50E641DF152F7109ED5456B412B1DA197FB71123ACD3A729901D1A71874700133107EC53', 16);
        $this->order = gmp_init('0x8CB91E82A3386D280F5D6F7E50E641DF152F7109ED5456B31F166E6CAC0425A7CF3AB6AF6B7FC3103B883202E9046565', 16);
    }

    public function testAddPoint(): void
    {
        $p1 = $this->getGenerator();
        $p2 = new JacobiPoint();
        $p2->x = gmp_init('0x1D1C64F068CF45FFA2A63A81B7C13F6B8847A3E77EF14FE3DB7FCAFE0CBD10E8E826E03436D646AAEF87B2E247D4AF1E', 16);
        $p2->y = gmp_init('0x8ABE1D7520F9C2A45CB1EB8E95CFD55262B70B29FEEC5864E19C054FF99129280E4646217791811142820341263C5315', 16);;
        $p2->z = gmp_init(1);
        $added = $this->bp384->addInternal($p1, $p2);
        $affine = $this->bp384->jacobiToAffine($added);

        $expectX = gmp_init('0x2282bc382a2f4dfcb95c3495d7b4fd590ad520b3eb6be4d6ec2f80c4e0f70df87c4ba74a09b553ebb427b58df9d59fca', 16);
        $expectY = gmp_init('0x0edda83773ac68735768d14a24f37a57ce9bedbc170921ce4d89dd051728fc3eb4b4ea69ab64fc288f1b29502b6e1d30', 16);

        $this->assertGMPSame($expectX, $affine->x, 'x differs');
        $this->assertGMPSame($expectY, $affine->y, 'y differs');
    }

    private function getGenerator(): JacobiPoint
    {
        $p = new JacobiPoint();
        /** @var GMP $x */
        $x = gmp_init('0x1D1C64F068CF45FFA2A63A81B7C13F6B8847A3E77EF14FE3DB7FCAFE0CBD10E8E826E03436D646AAEF87B2E247D4AF1E', 16);
        /** @var GMP $y */
        $y = gmp_init('0x8ABE1D7520F9C2A45CB1EB8E95CFD55262B70B29FEEC5864E19C054FF99129280E4646217791811142820341263C5315', 16);
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

        $affine = $this->bp384->jacobiToAffine($in);
        $this->assertGMPSame($expectX, $affine->x, 'x differs');
        $this->assertGMPSame($expectY, $affine->y, 'y differs');
    }

    /**
     * @dataProvider scalarMultBaseProvider
     */
    public function testScalarMultBase(GMP $scalar, GMP $expectX, GMP $expectY): void
    {
        $point = $this->bp384->scalarMultBase($scalar);

        $this->assertGMPSame($expectX, $point->getX());
        $this->assertGMPSame($expectY, $point->getY());
    }

    /**
     * @dataProvider scalarMultProvider
     */
    public function testScalarMult(GMP $k, GMP $xIn, GMP $yIn, GMP $xOut, GMP $yOut): void
    {
        $curve = CurveFactory::getCurveByName(BrainpoolCurve::NAME_P384R1);
        $point = new Point(
            new ConstantTimeMath(),
            $curve,
            $xIn,
            $yIn,
            clone $this->order
        );

        $out = $this->bp384->scalarMult($k, $point);
        $this->assertGMPSame($xOut, $out->getX());
        $this->assertGMPSame($yOut, $out->getY());
    }

    /**
     * @dataProvider addProvider
     */
    public function testAddElements(GMP $e, GMP $f): void
    {
        $x1 = gmp_mod(gmp_add($e, $f), $this->prime);
        $x2 = $this->bp384->addElements($e, $f, true);

        // Ensure we get what we expect:
        $this->assertGMPSame($x1, $x2);
    }

    /**
     * @dataProvider mulProvider
     */
    public function testMulElements(GMP $a, GMP $b): void
    {
        $c = gmp_mod($a * $b, $this->prime);
        $d = $this->bp384->mulElements($a, $b);
        $this->assertGMPSame($c, $d);
    }

    /**
     * @dataProvider subProvider
     */
    public function testSubElements(GMP $e, GMP $f): void
    {
        $x1 = gmp_mod(gmp_sub($e, $f), $this->prime);
        $y1 = gmp_mod(gmp_sub($f, $e), $this->prime);
        $x2 = $this->bp384->subElements($e, $f);
        $y2 = $this->bp384->subElements($f, $e);

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
                gmp_init(bin2hex(random_bytes(48)), 16),
                gmp_init(bin2hex(random_bytes(48)), 16)
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
                gmp_init('a8' . bin2hex(random_bytes(47)), 16),
                gmp_init('a8' . bin2hex(random_bytes(47)), 16)
            ],
            [
                gmp_mod(gmp_init(bin2hex(random_bytes(48)), 16), $this->prime),
                gmp_mod(gmp_init(bin2hex(random_bytes(48)), 16), $this->prime)
            ],
        ];
    }

    public function scalarMultBaseProvider(): array
    {
        return [
            [
                gmp_init(1),
                gmp_init('0x1d1c64f068cf45ffa2a63a81b7c13f6b8847a3e77ef14fe3db7fcafe0cbd10e8e826e03436d646aaef87b2e247d4af1e', 16),
                gmp_init('0x8abe1d7520f9c2a45cb1eb8e95cfd55262b70b29feec5864e19c054ff99129280e4646217791811142820341263c5315', 16)
            ],
            [
                gmp_init(2),
                gmp_init('0x2282bc382a2f4dfcb95c3495d7b4fd590ad520b3eb6be4d6ec2f80c4e0f70df87c4ba74a09b553ebb427b58df9d59fca', 16),
                gmp_init('0x0edda83773ac68735768d14a24f37a57ce9bedbc170921ce4d89dd051728fc3eb4b4ea69ab64fc288f1b29502b6e1d30', 16)
            ],
            [
                gmp_init(3),
                gmp_init('0x7b63205bf00ddae73b17452b6a27ebf53df581348c6949f83ee1b6fcc7463bbe3c11ef6596a3b8897d7cc85b3035f11f', 16),
                gmp_init('0x761d3a4a5f8093775521a326bc02baaf7b2eb481ead16a5c7b2bd39462363e0373c0edaea3b8f59381d7129d48772eb3', 16)
            ],
            [
                gmp_init(4),
                gmp_init('0x0dd5393f5c8859560675d5abc72ebc2ae45a6dca90945dba8d4462d702c844e11a345294d5446828e48921ec979f4a32', 16),
                gmp_init('0x80ffdfa1ea4fdf56ad184f44d3ab5005832cf70a0254f70f071ec79036c5f4676fce80c25f70c7af103b90824e878ba2', 16)
            ],
            [
                gmp_init(10),
                gmp_init('0x52a858b07ec4ea734d382f06b4a3132078c3c59bd5487fed24282a927cbba20549bf62999a511ccd5d8fdc43ecb0206b', 16),
                gmp_init('0x6c182d0955164f22c52783ebf4a5b7ad50577172434adcdc377d71165aa33be8e14ba26c4a4cdde5f93a4db5a9a62924', 16)
            ],
            [
                gmp_init(100),
                gmp_init('0x6e2aa59ae8680c896c27fbb6477cbe582282fba14a12f3a5f88c4970fe4ca612d812e7220d5017bcff22d2e67cd930f3', 16),
                gmp_init('0x362c209222e058f9524c0772aaecd4a14ae6cb8bad1682af0a60fb09f8090220ed83f9a009b36c99177e22050260c397', 16)
            ],
            [
                gmp_init('112233445566778899'),
                gmp_init('0x8615f1af3624b25454cf688b425e3b7d288e3d978ea75f4ae1f5312155d1ceb1e27bad33e6e90ae66add2814d1df7315', 16),
                gmp_init('0x07dc9028c68569d4163acd9f1911add12207b7e3f95da347f460ddd629b09966defe1b779940db93405e56fa2e17062e', 16)
            ]
        ];
    }

    public function scalarMultProvider(): array
    {
        return [
            /* RFC 6932 */
            [
                gmp_init("0x014EC0755B78594BA47FB0A56F6173045B4331E74BA1A6F47322E70D79D828D97E095884CA72B73FDABD5910DF0FA76A", 16),
                gmp_init("0x01BF92A92EE4BE8DED1A911125C209B03F99E3161CFCC986DC7711383FC30AF9CE28CA3386D59E2C8D72CE1E7B4666E8", 16),
                gmp_init("0x3289C4A3A4FEE035E39BDB885D509D224A142FF9FBCC5CFE5CCBB30268EE47487ED8044858D31D848F7A95C635A347AC", 16),
                gmp_init('0x04CC4FF3DCCCB07AF24E0ACC529955B36D7C807772B92FCBE48F3AFE9A2F370A1F98D3FA73FD0C0747C632E12F1423EC', 16),
                gmp_init('0x7F465F90BD69AFB8F828A214EB9716D66ABC59F17AF7C75EE7F1DE22AB5D05085F5A01A9382D05BF72D96698FE3FF64E', 16)
            ],
            [
                gmp_init("0x6B461CB79BD0EA519A87D6828815D8CE7CD9B3CAA0B5A8262CBCD550A015C90095B976F3529957506E1224A861711D54", 16),
                gmp_init("0x45CB26E4384DAF6FB776885307B9A38B7AD1B5C692E0C32F0125332778F3B8D3F50CA358099B30DEB5EE69A95C058B4E", 16),
                gmp_init("0x8173A1C54AFFA7E781D0E1E1D12C0DC2B74F4DF58E4A4E3AF7026C5D32DC530A2CD89C859BB4B4B768497F49AB8CC859", 16),
                gmp_init('0x04CC4FF3DCCCB07AF24E0ACC529955B36D7C807772B92FCBE48F3AFE9A2F370A1F98D3FA73FD0C0747C632E12F1423EC', 16),
                gmp_init('0x7F465F90BD69AFB8F828A214EB9716D66ABC59F17AF7C75EE7F1DE22AB5D05085F5A01A9382D05BF72D96698FE3FF64E', 16)
            ]
        ];
    }

    public function jacobiToAffineProvider(): array
    {
        return [
            [
                gmp_init("0x89198d176e28d70942d999483ac7b0137bbc35041640a46120fefc293a203d46c02450f323c25091d27fd64888269709", 16),
                gmp_init("0x5603fac7e369533e23772cc87bf3bd96b86f2d212e596aa1f7d343d7b4201cd41deb51294d358c51681df6ae95a63ec1", 16),
                gmp_init("0x7441359de82af611967c8682e8604a44893d50e91e8f1e8d1c90a3d3d4c4153d22e4f28884503361d489bf2df409d5b7", 16),
                gmp_init('0x2282bc382a2f4dfcb95c3495d7b4fd590ad520b3eb6be4d6ec2f80c4e0f70df87c4ba74a09b553ebb427b58df9d59fca', 16),
                gmp_init('0x0edda83773ac68735768d14a24f37a57ce9bedbc170921ce4d89dd051728fc3eb4b4ea69ab64fc288f1b29502b6e1d30', 16)
            ]
        ];
    }
}
