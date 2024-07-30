/**
 * Definition for singly-linked list.
 * function ListNode(val, next) {
 *     this.val = (val===undefined ? 0 : val)
 *     this.next = (next===undefined ? null : next)
 * }
 */
/**
 * @param {ListNode} head
 * @return {ListNode}
 */
var middleNode = function(head) {
    let singleStep = head;
    let doubleStep = head;

    while (doubleStep !== null && doubleStep.next !== null) {
        singleStep = singleStep.next;
        doubleStep = doubleStep.next.next;
    }

    return singleStep;
};