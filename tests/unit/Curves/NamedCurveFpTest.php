<?php
declare(strict_types=1);

namespace Mdanter\Ecc\Tests\Curves;

use Mdanter\Ecc\Curves\NamedCurveFp;
use Mdanter\Ecc\Curves\NistCurve;
use Mdanter\Ecc\EccFactory;
use Mdanter\Ecc\Tests\AbstractTestCase;

class NamedCurveFpTest extends AbstractTestCase
{
    public function testInstance()
    {
        $curve = EccFactory::getNistCurves(null, true)->curve384();
        $this->assertInstanceOf(NamedCurveFp::class, $curve);
        ;
        $this->assertEquals(NistCurve::NAME_P384, $curve->getName());
    }
}
