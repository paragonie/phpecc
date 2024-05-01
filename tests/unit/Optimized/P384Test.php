<?php
declare(strict_types=1);
namespace Mdanter\Ecc\Tests\Optimized;

use GMP;
use Mdanter\Ecc\Optimized\Common\JacobiPoint;
use Mdanter\Ecc\Optimized\P384;
use Mdanter\Ecc\Tests\AbstractTestCase;

class P384Test extends AbstractTestCase
{
    /** @var P384 $p384 */
    private $p384;

    /** @var GMP $prime */
    private $prime;

    /** @var GMP $order */
    private $order;

    public function setUp(): void
    {
        parent::setUp();
        $this->p384 = new P384();
        $this->prime = gmp_init('0xfffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffeffffffff0000000000000000ffffffff', 16);
        $this->order = gmp_init('0xffffffffffffffffffffffffffffffffffffffffffffffffc7634d81f4372ddf581a0db248b0a77aecec196accc52973', 16);
    }

    /**
     * @dataProvider addProvider
     */
    public function testAddElements(GMP $e, GMP $f): void
    {
        $x1 = gmp_mod(gmp_add($e, $f), $this->prime);
        $x2 = $this->p384->addElements($e, $f, true);

        // Ensure we get what we expect:
        $this->assertGMPSame($x1, $x2);
    }

    public function testDoublePoint(): void
    {
        $g = $this->getGenerator();
        $g2 = $this->p384->addInternal(clone $g, clone $g);
        $dbl = $this->p384->doubleInternal($g);

        $this->assertGMPSame($g2->x, $dbl->x, 'x differs (g+g vs 2g)');
        $this->assertGMPSame($g2->y, $dbl->y, 'y differs (g+g vs 2g)');
        $this->assertGMPSame($g2->z, $dbl->z, 'z differs (g+g vs 2g)');

        $g2 = $this->p384->jacobiToAffine($g2);
        $dbl = $this->p384->jacobiToAffine($dbl);

        $this->assertGMPSame($g2->x, $dbl->x, 'x differs (g+g vs 2g)');
        $this->assertGMPSame($g2->y, $dbl->y, 'y differs (g+g vs 2g)');

        $affine = $dbl;

        $expectX = gmp_init('0x08D999057BA3D2D969260045C55B97F089025959A6F434D651D207D19FB96E9E4FE0E86EBE0E64F85B96A9C75295DF61', 16);
        $expectY = gmp_init('0x8E80F1FA5B1B3CEDB7BFE8DFFD6DBA74B275D875BC6CC43E904E505F256AB4255FFD43E94D39E22D61501E700A940E80', 16);

        $this->assertGMPSame($expectX, $affine->x, 'x differs');
        $this->assertGMPSame($expectY, $affine->y, 'y differs');
    }

    /**
     * @dataProvider scalarMultBaseProvider
     */
    public function testScalarMultBase(GMP $scalar, GMP $expectX, GMP $expectY): void
    {
        $point = $this->p384->scalarMultBase($scalar);

        $this->assertGMPSame($expectX, $point->getX());
        $this->assertGMPSame($expectY, $point->getY());
    }

    /**
     * @dataProvider mulProvider
     */
    public function testMulElements(GMP $a, GMP $b): void
    {
        $c = gmp_mod($a * $b, $this->prime);
        $d = $this->p384->mulElements($a, $b);
        $this->assertGMPSame($c, $d);
    }

    /**
     * @dataProvider subProvider
     */
    public function testSubElements(GMP $e, GMP $f): void
    {
        $x1 = gmp_mod(gmp_sub($e, $f), $this->prime);
        $y1 = gmp_mod(gmp_sub($f, $e), $this->prime);
        $x2 = $this->p384->subElements($e, $f);
        $y2 = $this->p384->subElements($f, $e);

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
                gmp_init(bin2hex(random_bytes(47)), 16)
            ],
            [
                gmp_init('fe' . bin2hex(random_bytes(47)), 16),
                gmp_init('fe' . bin2hex(random_bytes(47)), 16)
            ],
            [
                gmp_init(bin2hex(random_bytes(48)), 16),
                gmp_init(bin2hex(random_bytes(48)), 16)
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
                gmp_init('0xAA87CA22BE8B05378EB1C71EF320AD746E1D3B628BA79B9859F741E082542A385502F25DBF55296C3A545E3872760AB7', 16),
                gmp_init('0x3617DE4A96262C6F5D9E98BF9292DC29F8F41DBD289A147CE9DA3113B5F0B8C00A60B1CE1D7E819D7A431D7C90EA0E5F', 16)
            ],
            [
                gmp_init(2),
                gmp_init('0x08D999057BA3D2D969260045C55B97F089025959A6F434D651D207D19FB96E9E4FE0E86EBE0E64F85B96A9C75295DF61', 16),
                gmp_init('0x8E80F1FA5B1B3CEDB7BFE8DFFD6DBA74B275D875BC6CC43E904E505F256AB4255FFD43E94D39E22D61501E700A940E80', 16)
            ],
            [
                gmp_init(3),
                gmp_init('0x077A41D4606FFA1464793C7E5FDC7D98CB9D3910202DCD06BEA4F240D3566DA6B408BBAE5026580D02D7E5C70500C831', 16),
                gmp_init('0xC995F7CA0B0C42837D0BBE9602A9FC998520B41C85115AA5F7684C0EDC111EACC24ABD6BE4B5D298B65F28600A2F1DF1', 16)
            ],
            [
                gmp_init(4),
                gmp_init('0x138251CD52AC9298C1C8AAD977321DEB97E709BD0B4CA0ACA55DC8AD51DCFC9D1589A1597E3A5120E1EFD631C63E1835', 16),
                gmp_init('0xCACAE29869A62E1631E8A28181AB56616DC45D918ABC09F3AB0E63CF792AA4DCED7387BE37BBA569549F1C02B270ED67', 16)
            ],
            [
                gmp_init('112233445566778899'),
                gmp_init('0xA499EFE48839BC3ABCD1C5CEDBDD51904F9514DB44F4686DB918983B0C9DC3AEE05A88B72433E9515F91A329F5F4FA60', 16),
                gmp_init('0x3B7CA28EF31F809C2F1BA24AAED847D0F8B406A4B8968542DE139DB5828CA410E615D1182E25B91B1131E230B727D36A', 16)
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

    private function getGenerator(): JacobiPoint
    {
        $p = new JacobiPoint();
        /** @var GMP $x */
        $x = gmp_init('0xaa87ca22be8b05378eb1c71ef320ad746e1d3b628ba79b9859f741e082542a385502f25dbf55296c3a545e3872760ab7', 16);
        /** @var GMP $y */
        $y = gmp_init('0x3617de4a96262c6f5d9e98bf9292dc29f8f41dbd289a147ce9da3113b5f0b8c00a60b1ce1d7e819d7a431d7c90ea0e5f', 16);
        /** @var GMP $z */
        $z = gmp_init(1);

        $p->x = $x;
        $p->y = $y;
        $p->z = $z;
        return $p;
    }
}
