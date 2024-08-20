<?php

class Solution {
    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function findDisappearedNumbers($nums) {
        $n = count($nums);
        $allElements = range(1, $n);
        $flipNums = array_flip($nums);

        $result = array_diff($allElements, array_keys($flipNums));
        return $result;
    }
}