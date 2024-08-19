function findFinalValue(nums, original) {
    while (nums.includes(original)) {
        original *= 2;
    }
    
    return original;
}