/**
 * @param {string[]} strs
 * @return {string}
 */
var longestCommonPrefix = function(strs) {
    let firstString = strs[0];

    for (let i = 0; i < firstString.length; i++) {
        let currentChar =  firstString[i];
        
        for (let str of strs) {
            if (str[i] !== currentChar || i > str.length) {
                return firstString.substring(0, i);
            }
        }
        
    }

    return firstString;
};