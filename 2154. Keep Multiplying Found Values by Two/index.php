<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $original
     * @return Integer
     */
    function findFinalValue($nums, $original) {
        $flipNums = array_flip($nums);

        while (isset($flipNums[$original])) {
            $original *= 2;
        }
        
        return $original;
    }
}