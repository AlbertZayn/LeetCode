/**
 * @param {number[]} nums
 * @return {number[]}
 */
var runningSum = function(nums) {
    let currentSum = 0;
    let result = [];
    for (let num of nums) {
        currentSum += num;
        result.push(currentSum);
    }
    return result;
};