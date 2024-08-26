<?php 

class Solution {
    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
    function strStr($haystack, $needle) {
        $haystackLen = strlen($haystack);
        $needleLen = strlen($needle);

        if ($needleLen === 0) {
            return 0;
        }

        for ($i = 0; $i <= $haystackLen - $needleLen; $i++) {
            if (substr($haystack, $i, $needleLen) === $needle) {
                return $i;
            }
        }

        return -1;
    }
}