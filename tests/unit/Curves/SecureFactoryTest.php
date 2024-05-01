<?php
declare(strict_types=1);
namespace Mdanter\Ecc\Tests\Curves;

use Mdanter\Ecc\Curves\BrainpoolCurve;
use Mdanter\Ecc\Curves\SecureCurveFactory;
use Mdanter\Ecc\Curves\NistCurve;
use Mdanter\Ecc\Curves\SecgCurve;
use Mdanter\Ecc\Exception\InsecureCurveException;
use Mdanter\Ecc\Tests\AbstractTestCase;

class SecureFactoryTest extends AbstractTestCase
{
    public function getInsecureCurves(): array
    {
        return [
            [NistCurve::NAME_P192],
            [NistCurve::NAME_P224],
            [SecgCurve::NAME_SECP_112R1],
            [SecgCurve::NAME_SECP_192K1],
        ];
    }

    public function getCurveNames(): array
    {
        return [
            [NistCurve::NAME_P256],
            [NistCurve::NAME_P384],
            [NistCurve::NAME_P521],
            [BrainpoolCurve::NAME_P256R1],
            [BrainpoolCurve::NAME_P384R1],
            [BrainpoolCurve::NAME_P512R1],
            [SecgCurve::NAME_SECP_256R1],
            [SecgCurve::NAME_SECP_256K1],
            [SecgCurve::NAME_SECP_384R1],
        ];
    }

    /**
     * @param string $name
     * @dataProvider getInsecureCurves
     */
    public function testThrowsIfInsecureCurve(string $name): void
    {
        $this->expectException(InsecureCurveException::class);
        SecureCurveFactory::getCurveByName($name);
    }
    /**
     * @param string $name
     * @dataProvider getInsecureCurves
     */
    public function testThrowsIfInsecureGenerator(string $name): void
    {
        $this->expectException(InsecureCurveException::class);
        SecureCurveFactory::getGeneratorByName($name);
    }

    /**
     * @param string $name
     * @dataProvider getCurveNames
     */
    public function testLoadsCurveByName(string $name): void
    {
        $curve = SecureCurveFactory::getCurveByName($name);
        $generator = SecureCurveFactory::getGeneratorByName($name);
        $this->assertEquals($name, $curve->getName());
        $this->assertEquals($name, $generator->getCurve()->getName());
    }
}
