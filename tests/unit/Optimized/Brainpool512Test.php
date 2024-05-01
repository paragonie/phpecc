<?php
declare(strict_types=1);
namespace Mdanter\Ecc\Tests\Optimized;

use GMP;
use Mdanter\Ecc\Curves\BrainpoolCurve;
use Mdanter\Ecc\Curves\CurveFactory;
use Mdanter\Ecc\Math\ConstantTimeMath;
use Mdanter\Ecc\Optimized\Common\JacobiPoint;
use Mdanter\Ecc\Optimized\BP512;
use Mdanter\Ecc\Primitives\Point;
use Mdanter\Ecc\Tests\AbstractTestCase;

class Brainpool512Test extends AbstractTestCase
{
    /** @var BP512 $bp512 */
    private $bp512;

    /** @var GMP $prime */
    private $prime;

    public function setUp(): void
    {
        parent::setUp();
        $this->bp512 = new BP512();
        $this->prime = gmp_init('0xAADD9DB8DBE9C48B3FD4E6AE33C9FC07CB308DB3B3C9D20ED6639CCA703308717D4D9B009BC66842AECDA12AE6A380E62881FF2F2D82C68528AA6056583A48F3', 16);
        $this->order = gmp_init('0xAADD9DB8DBE9C48B3FD4E6AE33C9FC07CB308DB3B3C9D20ED6639CCA70330870553E5C414CA92619418661197FAC10471DB1D381085DDADDB58796829CA90069', 16);
    }

    public function testAddPoint(): void
    {
        $p1 = $this->getGenerator();
        $p2 = new JacobiPoint();
        $p2->x = gmp_init('0x81AEE4BDD82ED9645A21322E9C4C6A9385ED9F70B5D916C1B43B62EEF4D0098EFF3B1F78E2D0D48D50D1687B93B97D5F7C6D5047406A5E688B352209BCB9F822', 16);
        $p2->y = gmp_init('0x7DDE385D566332ECC0EABFA9CF7822FDF209F70024A57B1AA000C55B881F8111B2DCDE494A5F485E5BCA4BD88A2763AED1CA2B2FA8F0540678CD1E0F3AD80892', 16);
        $p2->z = gmp_init(1);
        $added = $this->bp512->addInternal($p1, $p2);
        $affine = $this->bp512->jacobiToAffine($added);

        $expectX = gmp_init('0x9f4945f680edf9800a63285758f399b3d18d8141b8a18064a30d3035f4cb6581957877f3a8f0f72597116e702915a4f4f698f404089a4cc5080447def02f4850', 16);
        $expectY = gmp_init('0x6d6b4b188b699c5649826b716292f29d149ce1238d3f1e0f5a2c366b03e5d1b2fdf99bb1709c700fa5c3b602b0960cbf63a42e4181fd929ce269ad21be592e71', 16);

        $this->assertGMPSame($expectX, $affine->x, 'x differs');
        $this->assertGMPSame($expectY, $affine->y, 'y differs');
    }

    private function getGenerator(): JacobiPoint
    {
        $p = new JacobiPoint();
        /** @var GMP $x */
        $x = gmp_init('0x81AEE4BDD82ED9645A21322E9C4C6A9385ED9F70B5D916C1B43B62EEF4D0098EFF3B1F78E2D0D48D50D1687B93B97D5F7C6D5047406A5E688B352209BCB9F822', 16);
        /** @var GMP $y */
        $y = gmp_init('0x7DDE385D566332ECC0EABFA9CF7822FDF209F70024A57B1AA000C55B881F8111B2DCDE494A5F485E5BCA4BD88A2763AED1CA2B2FA8F0540678CD1E0F3AD80892', 16);
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

        $affine = $this->bp512->jacobiToAffine($in);
        $this->assertGMPSame($expectX, $affine->x, 'x differs');
        $this->assertGMPSame($expectY, $affine->y, 'y differs');
    }

    /**
     * @dataProvider scalarMultBaseProvider
     */
    public function testScalarMultBase(GMP $scalar, GMP $expectX, GMP $expectY): void
    {
        $point = $this->bp512->scalarMultBase($scalar);

        $this->assertGMPSame($expectX, $point->getX());
        $this->assertGMPSame($expectY, $point->getY());
    }

    /**
     * @dataProvider scalarMultProvider
     */
    public function testScalarMult(GMP $k, GMP $xIn, GMP $yIn, GMP $xOut, GMP $yOut): void
    {
        $curve = CurveFactory::getCurveByName(BrainpoolCurve::NAME_P512R1);
        $point = new Point(
            new ConstantTimeMath(),
            $curve,
            $xIn,
            $yIn,
            clone $this->order
        );

        $out = $this->bp512->scalarMult($k, $point);
        $this->assertGMPSame($xOut, $out->getX());
        $this->assertGMPSame($yOut, $out->getY());
    }

    /**
     * @dataProvider addProvider
     */
    public function testAddElements(GMP $e, GMP $f): void
    {
        $x1 = gmp_mod(gmp_add($e, $f), $this->prime);
        $x2 = $this->bp512->addElements($e, $f, true);

        // Ensure we get what we expect:
        $this->assertGMPSame($x1, $x2);
    }

    /**
     * @dataProvider mulProvider
     */
    public function testMulElements(GMP $a, GMP $b): void
    {
        $c = gmp_mod($a * $b, $this->prime);
        $d = $this->bp512->mulElements($a, $b);
        $this->assertGMPSame($c, $d);
    }

    /**
     * @dataProvider subProvider
     */
    public function testSubElements(GMP $e, GMP $f): void
    {
        $x1 = gmp_mod(gmp_sub($e, $f), $this->prime);
        $y1 = gmp_mod(gmp_sub($f, $e), $this->prime);
        $x2 = $this->bp512->subElements($e, $f);
        $y2 = $this->bp512->subElements($f, $e);

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
                gmp_init('fe' . bin2hex(random_bytes(63)), 16),
                gmp_init('fe' . bin2hex(random_bytes(63)), 16)
            ],
            [
                gmp_init(bin2hex(random_bytes(64)), 16),
                gmp_init(bin2hex(random_bytes(64)), 16)
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
                gmp_init('fe' . bin2hex(random_bytes(63)), 16),
                gmp_init('fe' . bin2hex(random_bytes(63)), 16)
            ],
            [
                $this->prime - gmp_init(random_int(100, 100000)),
                $this->prime - gmp_init(random_int(100, 100000))
            ],
            [
                gmp_init(bin2hex(random_bytes(64)), 16),
                gmp_init(bin2hex(random_bytes(64)), 16)
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
                gmp_mod(gmp_init(bin2hex(random_bytes(64)), 16), $this->prime),
                gmp_mod(gmp_init(bin2hex(random_bytes(64)), 16), $this->prime)
            ],
        ];
    }

    public function scalarMultBaseProvider(): array
    {
        return [
            [
                gmp_init(1),
                gmp_init('0x81aee4bdd82ed9645a21322e9c4c6a9385ed9f70b5d916c1b43b62eef4d0098eff3b1f78e2d0d48d50d1687b93b97d5f7c6d5047406a5e688b352209bcb9f822', 16),
                gmp_init('0x7dde385d566332ecc0eabfa9cf7822fdf209f70024a57b1aa000c55b881f8111b2dcde494a5f485e5bca4bd88a2763aed1ca2b2fa8f0540678cd1e0f3ad80892', 16)
            ],
            [
                gmp_init(2),
                gmp_init('0x9f4945f680edf9800a63285758f399b3d18d8141b8a18064a30d3035f4cb6581957877f3a8f0f72597116e702915a4f4f698f404089a4cc5080447def02f4850', 16),
                gmp_init('0x6d6b4b188b699c5649826b716292f29d149ce1238d3f1e0f5a2c366b03e5d1b2fdf99bb1709c700fa5c3b602b0960cbf63a42e4181fd929ce269ad21be592e71', 16)
            ],
            [
                gmp_init(3),
                gmp_init('0x08dd87e12b0a4cc436cdd42543f20afe907c80ef3bc2459309c09cefd830151bc1f6fb975ceecade4780ae53e1853d62f56e34abfa9ac7205d4abf882ccb8d94', 16),
                gmp_init('0x026ef5c6e1dab71d756ff0067376fa7543d903b4a6334c4bba0b382e1716d843acdab8eb772327b3febfcb69c0f37c5f8cce5bc75d8de6495cdeafba05b02c37', 16)
            ],
            [
                gmp_init(4),
                gmp_init('0x9c1e42cb14c9364511176a4925392efb1b89c57e7bfc0e12232c1cefbf203c8d8160c23543944c489164073d800156368b6dc2eacd9a4ad9a47f437a0f8cbfef', 16),
                gmp_init('0xa22cec2642c92c8c0fb10a3c52b2b2cb3256990cc16d00f3cb55d9412e925759eb4e08c0be4541627e934216d4e770e378decd4209fd169f1318b6342f73e2e2', 16)
            ],
            [
                gmp_init(10),
                gmp_init('0x9a2f396b2a0fc061303ef68278b3163d1ab6118fdce3e012823115e15be5b8fe10f39f5659ae4373c4709a730b9f97c8d5b6f23154f76b1a6d4348220516bce6', 16),
                gmp_init('0x2701c29ace9eb3c6af7a916f3cc098c067d4d752e21f62df8414db0752ff1f6cfc8c044b8befcfc5e146dcabc028ddbe67c3f4c7e7ecdf2c6ccb80d31b9bb792', 16)
            ],
            [
                gmp_init(100),
                gmp_init('0x1480b6a1df011f258b5cdfd20d553ee784c726a313e1ee4660d33f21c2ee25e503b11b23360d6482aab774d3d6f34284b4f6e28a13900898aa5f642caac10eba', 16),
                gmp_init('0x527267924e5a5b6e29303eb0e3678f64a61acbc8f0e80c2314f6cca5a7883dfcf4254d54a48800291b22da0320dd0dc66e44cb4a55748e20c1105b854d18e0cb', 16)
            ],
            [
                gmp_init('112233445566778899'),
                gmp_init('0x7bf9bd50496f269ab8fc0323168e00f6ef173ace42ba4f3883df5cc2d1e1b79b858d160ca5e24239a2339331e6596e7bd00bad207b6f880950d45ea6c3f32342', 16),
                gmp_init('0x4dfdc5ff3fbf522cb933bc296090238d3e6e9ba1dae771e6ec1699beaeebb54c937deba16ffe871df435e07329659d6bc7a24657fd2421f97b697a0cd730d51', 16)
            ]
        ];
    }

    public function scalarMultProvider(): array
    {
        return [
            [
                gmp_init("0x636B6BE0482A6C1C41AA7AE7B245E983392DB94CECEA2660A379CFE159559E357581825391175FC195D28BAC0CF03A7841A383B95C262B983782874CCE6FE333", 16),
                gmp_init("0x5A7954E32663DFF11AE24712D87419F26B708AC2B92877D6BFEE2BFC43714D89BBDB6D24D807BBD3AEB7F0C325F862E8BADE4F74636B97EAACE739E11720D323", 16),
                gmp_init("0x96D14621A9283A1BED84DE8DD64836B2C0758B11441179DC0C54C0D49A47C03807D171DD544B72CAAEF7B7CE01C7753E2CAD1A861ECA55A71954EE1BA35E04BE", 16),
                gmp_init('0x1EE8321A4BBF93B9CF8921AB209850EC9B7066D1984EF08C2BB723236208AC8F1A483E79461A00E0D5F6921CE9D360502F85C812BEDEE23AC5B210E5811B191E', 16),
                gmp_init('0x2632095B7B936174B41FD2FAF369B1D18DCADEED7E410A7E251F0831097C50D02CFED02607B6A2D5ADB4C0006008562208631875B58B54ECDA5A4F9FE9EAABA6', 16)
            ],
            [
                gmp_init("0x0AF4E7F6D52EDD52907BB8DBAB3992A0BB696EC10DF11892FF205B66D381ECE72314E6A6EA079CEA06961DBA5AE6422EF2E9EE803A1F236FB96A1799B86E5C8B", 16),
                gmp_init("0x0562E68B9AF7CBFD5565C6B16883B777FF11C199161ECC427A39D17EC2166499389571D6A994977C56AD8252658BA8A1B72AE42F4FB7532151AFC3EF0971CCDA", 16),
                gmp_init("0xA7CA2D8191E21776A89860AFBC1F582FAA308D551C1DC6133AF9F9C3CAD59998D70079548140B90B1F311AFB378AA81F51B275B2BE6B7DEE978EFC7343EA642E", 16),
                gmp_init('0x1EE8321A4BBF93B9CF8921AB209850EC9B7066D1984EF08C2BB723236208AC8F1A483E79461A00E0D5F6921CE9D360502F85C812BEDEE23AC5B210E5811B191E', 16),
                gmp_init('0x2632095B7B936174B41FD2FAF369B1D18DCADEED7E410A7E251F0831097C50D02CFED02607B6A2D5ADB4C0006008562208631875B58B54ECDA5A4F9FE9EAABA6', 16)
            ]
            /* RFC 6932 */
        ];
    }

    public function jacobiToAffineProvider(): array
    {
        return [
            [
                gmp_init("0x52b7c3bdc1b2af73c1904b100b97d5f3779bfc8f8d94e527d4030c5e08a4fbd0cf08d3f4492204f90e86ca679a69cffc6338878922167be7657d6a3d6c33eb5a", 16),
                gmp_init("0x708229e9fe028b35fb517d0ed871a103cb07b387c8f3a45b1b19df16aac00b3cb2e95d8e5d691913642a3e76c20c272ae2bd1547ad04a552f1fd19971c0e9279", 16),
                gmp_init("0x64820972660893d23d87024eeada668a952fd2f6a6fa84362ca5e6a212914a3157777e632a433752ae956c162ff76c68cb8783589230f2d3dde4062b440afb10", 16),
                gmp_init('0x9f4945f680edf9800a63285758f399b3d18d8141b8a18064a30d3035f4cb6581957877f3a8f0f72597116e702915a4f4f698f404089a4cc5080447def02f4850', 16),
                gmp_init('0x6d6b4b188b699c5649826b716292f29d149ce1238d3f1e0f5a2c366b03e5d1b2fdf99bb1709c700fa5c3b602b0960cbf63a42e4181fd929ce269ad21be592e71', 16)
            ]
        ];
    }
}
