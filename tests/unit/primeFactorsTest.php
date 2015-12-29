<?php

require '../vendor/autoload.php';

use App\primeFactors;

class primeFactorsTest extends PHPUnit_Framework_TestCase
{
    public function testItReturnsAndEmptyArrayFor1()
    {
        $primeFactors = new primeFactors();
        $testData = $primeFactors->generate(1);
        $testData->assertEmpty();
    }

}
