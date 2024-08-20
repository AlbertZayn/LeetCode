/**
 * @param {number[]} nums
 * @return {number[]}
 */
var findDisappearedNumbers = function(nums) {
    let n = nums.length;

    for (let i = 0; i < n; i++) {
        let index = Math.abs(nums[i]) - 1;
        if (nums[index] > 0) {
            nums[index] = -nums[index];
        }
    }

    const result = [];
    for (let j = 0; j < n; j++) {
        if (nums[j] > 0) {
            result.push(j + 1);
        }
    }

    return result;
};