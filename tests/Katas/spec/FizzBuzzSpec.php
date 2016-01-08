<?php

namespace spec\Katas;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FizzBuzzSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Katas\FizzBuzz');
    }

    function it_prints_the_number()
    {
        $this->run(1)->shouldReturn(1);
    }

    function it_is_divisible_by_three_translates_to_fizz()
    {
        $this->run(3)->shouldReturn('fizz');
    }

    function it_is_divisible_by_five_translates_to_buzz()
    {
        $this->run(5)->shouldReturn('buzz');
    }

    function it_is_divisible_by_fifteen_translates_to_fizzbuzz()
    {
        $this->run(15)->shouldReturn('fizzbuzz');
    }
}
