<?php 
class Solution {

/**
 * @param String $haystack
 * @param String $needle
 * @return Integer
 */
function strStr($haystack, $needle) {
    $pos = strpos($haystack, $needle);
    
    return $pos !== false ? $pos : -1;
}
}