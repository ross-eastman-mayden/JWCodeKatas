<?php

//require '../../vendor/autoload.php';

include_once '../../romanNumerals/romanNumerals.php';

use romanNumeralsPHP\romanNumerals;

class romanNumeralsTest extends PHPUnit_Framework_TestCase
{
    public function testItGivesIfor1()
    {
        $romanNumerals = new romanNumerals;
        $testData = $romanNumerals->convert(1);
        $this->assertEquals('I', $testData);
    }

    public function testItGivesIIfor2()
    {
        $romanNumerals = new romanNumerals;
        $testData = $romanNumerals->convert(2);
        $this->assertEquals('II', $testData);
    }

    public function testItGivesIVfor4()
    {
        $romanNumerals = new romanNumerals;
        $testData = $romanNumerals->convert(4);
        $this->assertEquals('IV', $testData);
    }

    public function testItGivesVfor5()
    {
        $romanNumerals = new romanNumerals;
        $testData = $romanNumerals->convert(5);
        $this->assertEquals('V', $testData);
    }

    public function testItGivesVIfor6()
    {
        $romanNumerals = new romanNumerals;
        $testData = $romanNumerals->convert(6);
        $this->assertEquals('VI', $testData);
    }

    public function testItGivesIVfor9()
    {
        $romanNumerals = new romanNumerals;
        $testData = $romanNumerals->convert(9);
        $this->assertEquals('IX', $testData);
    }

    public function testItGivesXfor10()
    {
        $romanNumerals = new romanNumerals;
        $testData = $romanNumerals->convert(10);
        $this->assertEquals('X', $testData);
    }

    public function testItGivesLfor50()
    {
        $romanNumerals = new romanNumerals;
        $testData = $romanNumerals->convert(50);
        $this->assertEquals('L', $testData);
    }

    public function testItGivesXXfor20()
    {
        $romanNumerals = new romanNumerals;
        $testData = $romanNumerals->convert(20);
        $this->assertEquals('XX', $testData);
    }

    public function testItGivesCfor100()
    {
        $romanNumerals = new romanNumerals;
        $testData = $romanNumerals->convert(100);
        $this->assertEquals('C', $testData);
    }

    public function testItGivesDfor500()
    {
        $romanNumerals = new romanNumerals;
        $testData = $romanNumerals->convert(500);
        $this->assertEquals('D', $testData);
    }

    public function testItGivesMfor1000()
    {
        $romanNumerals = new romanNumerals;
        $testData = $romanNumerals->convert(1000);
        $this->assertEquals('M', $testData);
    }

    public function testItGivesMCMXCIXfor1999()
    {
        $romanNumerals = new romanNumerals;
        $testData = $romanNumerals->convert(1999);
        $this->assertEquals('MCMXCIX', $testData);
    }

    public function testItGivesMMMMCMXCfor4990()
    {
        $romanNumerals = new romanNumerals;
        $testData = $romanNumerals->convert(4990);
        $this->assertEquals('MMMMCMXC', $testData);
    }

}
