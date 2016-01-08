<?php

namespace spec\Katas;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class NonDecreasingSequenceSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Katas\NonDecreasingSequence');
    }

    function it_is_single_element_array()
    {
        $input = array(1);
        $this->getSubSequence($input)->shouldReturn(array(array(1)));
    }

    function it_gets_simple_list()
    {
        $input = array(1, 2, 3);
        $this->getSubSequence($input)->shouldReturn(array(array(1, 2, 3)));
    }

    function it_gets_non_decreasing_sequence()
    {
        $input = array(1, 3, 2);
        $this->getSubSequence($input)->shouldReturn(
            array(
                array(1, 3),
                array(2)
            ));
    }

    function it_gets_non_descreasing_sequence_of_large_array()
    {
        $input = array(3,6,61,6,7,9,1,7,7,2,7,7,2,388,3,72,7);
        $this->getSubSequence($input)->shouldReturn(
            [
                [3,6,61],
                [6,7,9],
                [1,7,7],
                [2,7,7],
                [2,388],
                [3,72],
                [7]
            ]
        );
    }

    function it_gets_non_decreasing_sequence_of_simple_array_containing_a_string_ignores_non_integer()
    {
        $input = array(1, 2, 3, '5d', 2, 3);
        $this->getSubSequence($input)->shouldReturn([[1, 2, 3],[2, 3]]);
    }
}
