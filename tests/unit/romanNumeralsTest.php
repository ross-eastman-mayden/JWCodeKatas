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

}
