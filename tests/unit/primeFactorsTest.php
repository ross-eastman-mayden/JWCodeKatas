<?php

require '../vendor/autoload.php';

use App\primeFactors;

class primeFactorsTest extends PHPUnit_Framework_TestCase
{

    public function testItReturnsAndEmptyArrayFor1()
    {   $primeFactors = new primeFactors;
        $testData = $primeFactors->generate(1);
        $this->assertEmpty($testData);
    }
    public function testItReturns2For2()
    {
        $primeFactors = new primeFactors;
        $testData = $primeFactors->generate(2);
        $this->assertEquals([2], $testData);
    }

}
