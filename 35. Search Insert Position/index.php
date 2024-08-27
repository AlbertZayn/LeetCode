<?php

class Solution {
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target) {

        foreach ($nums as $num => $i) {
            if ($i >= $target) {
                return $num;
            }
        }

        return count($nums);
    }
}