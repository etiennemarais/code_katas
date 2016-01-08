<?php
namespace Katas;

class NonDecreasingSequence
{
    public function getSubSequence(array $input)
    {
        $output = array();
        $outputIndex = 0;

        foreach($input as $index => $value) {

            if (is_int($value) === true) {
                $output[$outputIndex][] = $value;
            }

            if (isset($input[$index + 1]) === true && $input[$index + 1] < $value) {
                $outputIndex++;
            }
        }
        return $output;
    }
}