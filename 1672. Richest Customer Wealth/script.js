/**
 * @param {number[][]} accounts
 * @return {number}
 */
var maximumWealth = function(accounts) {
    let maxWealth = 0;
    accounts.forEach(account => {
        let wealthSum = account.reduce((acc, curr) => acc + curr, 0);
        if (wealthSum > maxWealth) {
            maxWealth = wealthSum;
        }
    })
    return maxWealth;
};