<?php
namespace Katas;

class FizzBuzz
{
    public function run($number)
    {
        if ($number % 15 === 0) return 'fizzbuzz';
        if ($number % 3 === 0) return 'fizz';
        if ($number % 5 === 0) return 'buzz';

        return $number;
    }
}
