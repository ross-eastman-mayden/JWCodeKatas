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

    public function testItReturns2_2For4()
    {
        $primeFactors = new primeFactors;
        $testData = $primeFactors->generate(4);
        $this->assertEquals([2, 2], $testData);
    }
    public function testItReturns5For5()
    {
        $primeFactors = new primeFactors;
        $testData = $primeFactors->generate(5);
        $this->assertEquals([5], $testData);
    }

    public function testItReturns2_3For6()
    {
        $primeFactors = new primeFactors;
        $testData = $primeFactors->generate(6);
        $this->assertEquals([2, 3], $testData);
    }

    public function testItReturns2_2_2For8()
    {
        $primeFactors = new primeFactors;
        $testData = $primeFactors->generate(8);
        $this->assertEquals([2, 2, 2], $testData);
    }

    public function testItReturns3_3For9()
    {
        $primeFactors = new primeFactors;
        $testData = $primeFactors->generate(9);
        $this->assertEquals([3, 3], $testData);
    }

    public function testItReturns2_2_5_5For100()
    {
        $primeFactors = new primeFactors;
        $testData = $primeFactors->generate(100);
        $this->assertEquals([2, 2, 5, 5], $testData);
    }

}
