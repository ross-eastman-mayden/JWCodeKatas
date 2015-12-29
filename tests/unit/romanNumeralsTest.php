<?php

require '../../vendor/autoload.php';

use App\romanNumerals\romanNumerals;

class romanNumeralsTest extends PHPUnit_Framework_TestCase
{
    public function testItGivesIfor1()
    {
        $romanNumerals = new romanNumerals;
        $testData = $romanNumerals->convert(1);
        $this->assertEquals('I', $testData);
    }

}
