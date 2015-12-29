<?php
namespace App;

class primeFactors
{
    protected $number;

    public function generate($number)
    {
        if ($number == 2) {
            return [2];
        } else {
            return [];
        }

    }
}