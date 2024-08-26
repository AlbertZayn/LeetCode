/**
 * @param {string} haystack
 * @param {string} needle
 * @return {number}
 */
var strStr = function(haystack, needle) {

    let pos = haystack.indexOf(needle);
    
    return pos !== false ? pos : -1;
};