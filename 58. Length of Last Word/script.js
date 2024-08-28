/**
 * @param {string} s
 * @return {number}
 */
var lengthOfLastWord = function(s) {
    let trimS = s.trim();
    let splitTrimS = trimS.split(' ');
    return splitTrimS[splitTrimS.length - 1].length;
};