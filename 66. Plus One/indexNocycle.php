<?php

class Solution {

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits) {
        $sDigits = implode('', $digits);
        $nSDigits = (int) $sDigits;
        $nSDigits += 1;
        $output = array_map('intval', str_split($nSDigits));
        return $output;
    }
}