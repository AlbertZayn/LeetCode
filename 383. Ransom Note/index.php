<?php

class Solution {

    /**
     * @param String $ransomNote
     * @param String $magazine
     * @return Boolean
     */
    function canConstruct($ransomNote, $magazine) {
        $ransomNoteCharCount = array_count_values(str_split($ransomNote));
        $magazineCharCount = array_count_values(str_split($magazine));

        foreach($ransomNoteCharCount as $char => $count) {
            if (!isset($magazineCharCount[$char]) || $magazineCharCount[$char] < $count) {
                return false;
            }
        }

        return true;
    }
}