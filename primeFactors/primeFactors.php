<?php
namespace App;

class primeFactors
{
    protected $number;

    public function generate($number)
    {
        $primes = [];

        while ($number % 2 == 0) {
            $primes[] = 2;
            $number /= 2;
        }

        if ($number > 1) {
            $primes[] = $number;
        }

        return $primes;
    }
}