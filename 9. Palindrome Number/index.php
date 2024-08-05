<?php

class Solution {
    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        $xString = (string)$x;
        $xStringReverse = strrev($xString);
        $xIntegerReverse = (integer)$xStringReverse;

        if ($x === $xIntegerReverse) {
            return true;
        } else {
            return false;
        }
    }
}