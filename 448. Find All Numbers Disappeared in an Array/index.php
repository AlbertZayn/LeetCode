<?php

class Solution {
    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function findDisappearedNumbers($nums) {
        $n = count($nums);

        foreach ($nums as $num) {
            $index = abs($num) - 1;
            if ($nums[$index] > 0) {
                $nums[$index] = -$nums[$index];
            }
        }

        $result = [];
        for ($i = 0; $i < $n; $i++) {
            if ($nums[$i] > 0) {
                $result[] = $i + 1;
            }
        }

        return $result;
    }
}