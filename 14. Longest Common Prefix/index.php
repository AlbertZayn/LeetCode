<?php

class Solution {
/**
 * @param String[] $strs
 * @return String
 */
function longestCommonPrefix($strs) {
    $firstString = $strs[0];

    for ($i = 0; $i < strlen($firstString); $i++) {
        $currentChar = $firstString[$i];

        foreach ($strs as $str) {
            if ($str[$i] !== $currentChar || $i > strlen($str)) {
                return substr($firstString, 0, $i);
            }
        }
    }
    return $firstString;
}
}