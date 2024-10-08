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
     * @param ListNode $list1
     * @param ListNode $list2
     * @return ListNode
     */
    function mergeTwoLists($list1, $list2) {
        
        $newSortedList = new ListNode();
        $currentList = $newSortedList;

        while ($list1 !== null && $list2 !== null) {
            if ($list1->val <= $list2->val) {
                $currentList->next = $list1;
                $list1 = $list1->next;
            } else {
                $currentList->next = $list2;
                $list2 = $list2->next;
            }
            $currentList = $currentList->next;
        }

        if ($list1 !== null) {
            $currentList->next = $list1;
        } else {
            $currentList->next = $list2;
        }

        return $newSortedList->next;
    }
}