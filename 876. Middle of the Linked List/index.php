<?php
/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * @param ListNode $head
     * @return ListNode
     */
    
    public function middleNode($head) {
        $singleStep = $head;
        $doubleStep = $head;

        while ($doubleStep !== null && $doubleStep->next !== null) {
            $singleStep = $singleStep->next;
            $doubleStep = $doubleStep->next->next;
        }
        return $singleStep;
    }
}