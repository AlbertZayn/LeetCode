/**
 * @param {number} x
 * @return {boolean}
 */
var isPalindrome = function(x) {
    let xString = x.toString();
    let xStringReverse = xString.split('').reverse().join('');
    let xReverseInteger = parseInt(xStringReverse);

    if (xReverseInteger === x) {
        return true;
    } else {
        return false;
    }
};