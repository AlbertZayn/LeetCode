<?php

class Solution {
    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLastWord($s) {
        $trimS = trim($s);
        $explodeTrimS = explode(" ", $trimS);
        return strlen($explodeTrimS[count($explodeTrimS) - 1]);
    }
}