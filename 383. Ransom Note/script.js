/**
 * @param {string} ransomNote
 * @param {string} magazine
 * @return {boolean}
 */
var canConstruct = function(ransomNote, magazine) {
    let magazineCharCount = {};
    
    for (let char of magazine) {
        if (magazineCharCount[char]) {
            magazineCharCount[char]++;
        } else {
            magazineCharCount[char] = 1;
        }
    }

    for (let char of ransomNote) {
        if (!magazineCharCount[char] || magazineCharCount[char] === 0) {
            return false;
        }
        magazineCharCount[char]--;
    }

    return true;
};