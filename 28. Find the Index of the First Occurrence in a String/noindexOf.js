/**
 * @param {string} haystack
 * @param {string} needle
 * @return {number}
 */
var strStr = function(haystack, needle) {

    let haystackLen = haystack.length;
    let needleLen = needle.length;

    if (haystackLen === 0) {
        return 0;
    }

    for (let i = 0; i <= haystackLen - needleLen; i++) {
        if (haystack.substring(i, i + needleLen) === needle) {
            return i;
        }
    }

    return -1;
};