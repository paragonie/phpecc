<?php
declare(strict_types=1);

namespace Mdanter\Ecc\Tests\Optimized;

use GMP;
use Mdanter\Ecc\Curves\CurveFactory;
use Mdanter\Ecc\Curves\NistCurve;
use Mdanter\Ecc\Math\ConstantTimeMath;
use Mdanter\Ecc\Optimized\Common\JacobiPoint;
use Mdanter\Ecc\Optimized\P521;
use Mdanter\Ecc\Primitives\Point;
use Mdanter\Ecc\Tests\AbstractTestCase;

class P521Test extends AbstractTestCase
{
    /** @var P521 $p521 */
    private $p521;

    /** @var GMP $prime */
    private $prime;

    /** @var GMP $order */
    private $order;

    public function setUp(): void
    {
        parent::setUp();
        $this->p521 = new P521();
        $this->prime = gmp_init('6864797660130609714981900799081393217269435300143305409394463459185543183397656052122559640661454554977296311391480858037121987999716643812574028291115057151', 10);
        $this->order = gmp_init('6864797660130609714981900799081393217269435300143305409394463459185543183397655394245057746333217197532963996371363321113864768612440380340372808892707005449', 10);
    }

    public function testAddPoint(): void
    {
        $p1 = $this->getGenerator();
        $p1p1 = $this->p521->addInternal($p1, $p1);
        $aff = $this->p521->jacobiToAffine($p1p1);

        $p2 = JacobiPoint::init(
            gmp_init('0x433c219024277e7e682fcb288148c282747403279b1ccc06352c6e5505d769be97b3b204da6ef55507aa104a3a35c5af41cf2fa364d60fd967f43e3933ba6d783d', 16),
            gmp_init('0xf4bb8cc7f86db26700a7f3eceeeed3f0b5c6b5107c4da97740ab21a29906c42dbbb3e377de9f251f6b93937fa99a3248f4eafcbe95edc0f4f71be356d661f41b02', 16),
            gmp_init(1)
        );

        $this->assertGMPSame($p2->x, $aff->x, "x differs");
        $this->assertGMPSame($p2->y, $aff->y, 'y differs');

        $added = $this->p521->jacobiToAffine($this->p521->addInternal($p1, $p2));
        $expectX = gmp_init('0x1a73d352443de29195dd91d6a64b5959479b52a6e5b123d9ab9e5ad7a112d7a8dd1ad3f164a3a4832051da6bd16b59fe21baeb490862c32ea05a5919d2ede37ad7d', 16);
        $expectY = gmp_init('0x13e9b03b97dfa62ddd9979f86c6cab814f2f1557fa82a9d0317d2f8ab1fa355ceec2e2dd4cf8dc575b02d5aced1dec3c70cf105c9bc93a590425f588ca1ee86c0e5', 16);
        $this->assertGMPSame($expectX, $added->x);
        $this->assertGMPSame($expectY, $added->y);
    }

    public function testAddDoubleEquivalent(): void
    {
        $p1 = $this->getGenerator();

        $p2 = $this->p521->addInternal($p1, $p1);
        $p2b = $this->p521->doubleInternal($p1);
        $this->assertPointsSame($p2, $p2b, 'p2');

        $p4 = $this->p521->addInternal($p2, $p2);
        $p4b = $this->p521->doubleInternal($p2);
        $this->assertPointsSame($p4, $p4b, 'p4');

        $p8 = $this->p521->addInternal($p4, $p4);
        $p8b = $this->p521->doubleInternal($p4);
        $this->assertPointsSame($p8, $p8b, 'p8');

        $p16 = $this->p521->addInternal($p8, $p8);
        $p16b = $this->p521->doubleInternal($p8);
        $this->assertPointsSame($p16, $p16b, 'p16');

        // Now let's test a non-multiple of 2
        $p3 = $this->p521->addInternal($p1, $p2);
        $p3b = $this->p521->addInternal($p1, $p2);
        $this->assertPointsSame($p3, $p3b, 'p3');
        $p6 = $this->p521->addInternal($p2, $p4);
        $p6b = $this->p521->doubleInternal($p3);
        $this->assertPointsSame($p6, $p6b, 'p6');
    }

    protected function assertPointsSame(JacobiPoint $p1, JacobiPoint $p2, string $comment = ''): void
    {
        $a1 = $this->p521->jacobiToAffine($p1);
        $a2 = $this->p521->jacobiToAffine($p2);
        $this->assertGMPSame($a1->x, $a2->x, $comment . ' - X coordinate');
        $this->assertGMPSame($a1->y, $a2->y, $comment . ' - Y coordinate');
    }

    public function testDoublePoint(): void
    {
        $g = $this->getGenerator();
        $g2 = $this->p521->addInternal(clone $g, clone $g);
        $dbl = $this->p521->doubleInternal($g);

        $this->assertGMPSame($g2->x, $dbl->x, 'x differs (g+g vs 2g)');
        $this->assertGMPSame($g2->y, $dbl->y, 'y differs (g+g vs 2g)');
        $this->assertGMPSame($g2->z, $dbl->z, 'z differs (g+g vs 2g)');

        $g2 = $this->p521->jacobiToAffine($g2);
        $dbl = $this->p521->jacobiToAffine($dbl);

        $this->assertGMPSame($g2->x, $dbl->x, 'x differs (g+g vs 2g)');
        $this->assertGMPSame($g2->y, $dbl->y, 'y differs (g+g vs 2g)');

        $expectX = gmp_init('0x433c219024277e7e682fcb288148c282747403279b1ccc06352c6e5505d769be97b3b204da6ef55507aa104a3a35c5af41cf2fa364d60fd967f43e3933ba6d783d', 16);
        $expectY = gmp_init('0xf4bb8cc7f86db26700a7f3eceeeed3f0b5c6b5107c4da97740ab21a29906c42dbbb3e377de9f251f6b93937fa99a3248f4eafcbe95edc0f4f71be356d661f41b02', 16);
        $this->assertGMPSame($expectX, $dbl->x);
        $this->assertGMPSame($expectY, $dbl->y);
    }

    /**
     * @dataProvider scalarMultProvider
     */
    public function testScalarMult(GMP $k, GMP $xIn, GMP $yIn, GMP $xOut, GMP $yOut): void
    {
        if (!isset($this->prime)) $this->setUp();
        $curve = CurveFactory::getCurveByName(NistCurve::NAME_P521);
        $point = new Point(
            new ConstantTimeMath(),
            $curve,
            $xIn,
            $yIn,
            clone $this->order
        );

        $out = $this->p521->scalarMult($k, $point);
        $this->assertGMPSame($xOut, $out->getX());
        $this->assertGMPSame($yOut, $out->getY());
    }

    /**
     * @dataProvider scalarMultBaseProvider
     */
    public function testScalarMultBase(GMP $scalar, GMP $expectX, GMP $expectY): void
    {
        if (!isset($this->prime)) $this->setUp();
        $point = $this->p521->scalarMultBase($scalar);

        $this->assertGMPSame($expectX, $point->getX(), 'X');
        $this->assertGMPSame($expectY, $point->getY(), 'Y');
    }

    /**
     * @dataProvider addProvider
     */
    public function testAddElements(GMP $e, GMP $f): void
    {
        $x1 = gmp_mod(gmp_add($e, $f), $this->prime);
        $x2 = $this->p521->addElements($e, $f, true);

        // Ensure we get what we expect:
        $this->assertGMPSame($x1, $x2);
    }

    /**
     * @dataProvider mulProvider
     */
    public function testMulElements(GMP $a, GMP $b): void
    {
        $c = gmp_mod($a * $b, $this->prime);
        $d = $this->p521->mulElements($a, $b);
        $this->assertGMPSame($c, $d);
    }

    /**
     * @dataProvider subProvider
     */
    public function testSubElements(GMP $e, GMP $f): void
    {
        $x1 = gmp_mod(gmp_sub($e, $f), $this->prime);
        $y1 = gmp_mod(gmp_sub($f, $e), $this->prime);
        $x2 = $this->p521->subElements($e, $f);
        $y2 = $this->p521->subElements($f, $e);

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
                gmp_init('0xc6858e06b70404e9cd9e3ecb662395b4429c648139053fb521f828af606b4d3dbaa14b5e77efe75928fe1dc127a2ffa8de3348b3c1856a429bf97e7e31c2e5bd66', 16),
                gmp_init('0x11839296a789a3bc0045c8a5fb42c7d1bd998f54449579b446817afbd17273e662c97ee72995ef42640c550b9013fad0761353c7086a272c24088be94769fd16650', 16)
            ],
            [
                gmp_init(2),
                gmp_init('0x433c219024277e7e682fcb288148c282747403279b1ccc06352c6e5505d769be97b3b204da6ef55507aa104a3a35c5af41cf2fa364d60fd967f43e3933ba6d783d', 16),
                gmp_init('0xf4bb8cc7f86db26700a7f3eceeeed3f0b5c6b5107c4da97740ab21a29906c42dbbb3e377de9f251f6b93937fa99a3248f4eafcbe95edc0f4f71be356d661f41b02', 16)
            ],
            [
                gmp_init(3),
                gmp_init('0x1a73d352443de29195dd91d6a64b5959479b52a6e5b123d9ab9e5ad7a112d7a8dd1ad3f164a3a4832051da6bd16b59fe21baeb490862c32ea05a5919d2ede37ad7d', 16),
                gmp_init('0x13e9b03b97dfa62ddd9979f86c6cab814f2f1557fa82a9d0317d2f8ab1fa355ceec2e2dd4cf8dc575b02d5aced1dec3c70cf105c9bc93a590425f588ca1ee86c0e5', 16)
            ],
            [
                gmp_init(4),
                gmp_init('0x35b5df64ae2ac204c354b483487c9070cdc61c891c5ff39afc06c5d55541d3ceac8659e24afe3d0750e8b88e9f078af066a1d5025b08e5a5e2fbc87412871902f3', 16),
                gmp_init('0x82096f84261279d2b673e0178eb0b4abb65521aef6e6e32e1b5ae63fe2f19907f279f283e54ba385405224f750a95b85eebb7faef04699d1d9e21f47fc346e4d0d', 16)
            ],
            [
                gmp_init('112233445566778899'),
                gmp_init('0x1650048fbd63e8c30b305bf36bd7643b91448ef2206e8a0ca84a140789a99b0423a0a2533ea079ca7e049843e69e5fa2c25a163819110cec1a30acbbb3a422a40d8', 16),
                gmp_init('0x10c9c64a0e0db6052dbc5646687d06dece5e9e0703153efe9cb816fe025e85354d3c5f869d6db3f4c0c01b5f97919a5e72ceebe03042e5aa99112691cffc2724828', 16)
            ]
        ];
    }

    public function scalarMultProvider(): array
    {
        if (!isset($this->prime)) $this->setUp();
        return [
            [
                gmp_init("0856ce8f64e1c6e9ec0de0ebb20600447b34593bc9681dcca105343b2ed59e35e906194a9ea6ffaaf1201801c2e64d81a61482b620aafe9db26a2bf8a15a6274914", 16),
                gmp_init("1650048fbd63e8c30b305bf36bd7643b91448ef2206e8a0ca84a140789a99b0423a0a2533ea079ca7e049843e69e5fa2c25a163819110cec1a30acbbb3a422a40d8", 16),
                gmp_init("10c9c64a0e0db6052dbc5646687d06dece5e9e0703153efe9cb816fe025e85354d3c5f869d6db3f4c0c01b5f97919a5e72ceebe03042e5aa99112691cffc2724828", 16),
                gmp_init("089b722ba62838713bd10ffd0ea7ceec5e5a7691cada43644cab3a6294238abdd0afb559938e3cc5eaec1c8ace1a9a33337a0e776c4af400f8a2696aacff09226f1", 16),
                gmp_init("1c113aaf972a88c9657dc8e07578f1903dc7d2e9f949ba4dcb3af4c138b003c768a94a392f2088cd09ccbb10d7304d213073b459893876e73a1fbc060451f0c248f", 16)
            ]
        ];
    }

    private function getGenerator(): JacobiPoint
    {
        /** @var GMP $x */
        $x = gmp_init('0xc6858e06b70404e9cd9e3ecb662395b4429c648139053fb521f828af606b4d3dbaa14b5e77efe75928fe1dc127a2ffa8de3348b3c1856a429bf97e7e31c2e5bd66', 16);
        /** @var GMP $y */
        $y = gmp_init('0x11839296a789a3bc0045c8a5fb42c7d1bd998f54449579b446817afbd17273e662c97ee72995ef42640c550b9013fad0761353c7086a272c24088be94769fd16650', 16);
        /** @var GMP $z */
        $z = gmp_init(1);

        return JacobiPoint::init($x, $y, $z);
    }
}
