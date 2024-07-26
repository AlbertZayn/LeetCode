<?php

class Solution {

    /**
     * @param Integer[][] $accounts
     * @return Integer
     */
    function maximumWealth($accounts) {
        $maxWealth = 0;
        foreach ($accounts as $account) {
            $wealthSum = array_sum($account);
            if ($wealthSum > $maxWealth) {
            	$maxWealth = $wealthSum;
            }
        }
        return $maxWealth;
    }
}