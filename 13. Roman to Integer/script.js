/**
 * @param {string} s
 * @return {number}
 */
var romanToInt = function(s) {
    let result = 0;
    const romanIntMap = {
        'I': 1,
        'V': 5,
        'X': 10,
        'L': 50,
        'C': 100,
        'D': 500,
        'M': 1000
    };

    let prevValue = 0;
    for (let i = s.length - 1; i >= 0; i--) {
        let currentChar = s[i];
        let currentValue = romanIntMap[currentChar];

        if (currentValue >= prevValue) {
            result += currentValue;
        } else {
            result -= currentValue;
        }
        prevValue = currentValue;
    }

    return result;
};