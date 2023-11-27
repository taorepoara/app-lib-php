<?php

namespace Lenra\App\Test\Components\Style;

use Lenra\App\Components\Styles\Colors;
use PHPUnit\Framework\TestCase;

class ColorsTest extends TestCase {
    public function testBlackContrast() {
        $blackContrast = Colors::betterContrast(Colors::BLACK);
        $expectedResult = Colors::WHITE;
        $this->assertEquals($expectedResult, $blackContrast);
    }

    public function testBlackContrastBlackAndWhite() {
        $blackContrast = Colors::betterContrast(Colors::BLACK, Colors::BLACK, Colors::WHITE);
        $expectedResult = Colors::WHITE;
        $this->assertEquals($expectedResult, $blackContrast);
    }

    public function testWhiteContrast() {
        $whiteContrast = Colors::betterContrast(Colors::WHITE);
        $expectedResult = Colors::BLACK;
        $this->assertEquals($expectedResult, $whiteContrast);
    }

    public function testWhiteContrastBlackAndWhite() {
        $whiteContrast = Colors::betterContrast(Colors::WHITE, Colors::BLACK, Colors::WHITE);
        $expectedResult = Colors::BLACK;
        $this->assertEquals($expectedResult, $whiteContrast);
    }
}