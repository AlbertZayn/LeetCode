class Solution {

/**
 * @param Integer[] $nums
 * @return Integer[]
 */
function runningSum($nums) {
    $currentSum = 0;
    $result = [];
    foreach ($nums as $num) {
        $currentSum += $num;
        $result[] = $currentSum;
    }
    return $result;
}
}