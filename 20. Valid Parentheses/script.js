/**
 * @param {string} s
 * @return {boolean}
 */
var isValid = function(s) {
    const stackBrackets = [];
    const matchBrackets = {
        ')': '(',
        '}': '{',
        ']': '['
    };

    for (let i = 0; i < s.length; i++) {
        let currentChar = s[i];
        if (currentChar === '(' || currentChar === '{' || currentChar === '[') {
            stackBrackets.push(currentChar);
        } else if (currentChar === ')' || currentChar === '}' || currentChar === ']') {
            if (stackBrackets.length === 0 || stackBrackets.pop() !== matchBrackets[currentChar]) {
                return false;
            }
        }
    }
     return stackBrackets.length === 0;
};