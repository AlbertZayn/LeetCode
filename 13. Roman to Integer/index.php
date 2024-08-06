<?php

class Solution {
    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $result = 0;
        $romanIntMap = [
            'I' => 1, 
            'V' => 5, 
            'X' => 10, 
            'L' => 50, 
            'C' => 100, 
            'D' => 500, 
            'M' => 1000
        ];

        $prevValue = 0;
        for ($i = strlen($s)-1; $i >= 0; $i--) {
            $currentChar = $s[$i];
            $currentValue = $romanIntMap[$currentChar];

            if ($currentValue >= $prevValue) {
                $result += $currentValue;
            } else {
                $result -= $currentValue;
            }

            $prevValue = $currentValue;
        }

        return $result;
    }
}