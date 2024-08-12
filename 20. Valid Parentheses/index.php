<?php

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $stackBrackets = [];
        $matchingBrackets = [
            ')' => '(',
            '}' => '{',
            ']' => '[',
        ];

        for ($i = 0; $i < strlen($s); $i++) {
            $currentChar = $s[$i];
            if ($currentChar === '(' || $currentChar === '{' || $currentChar === '[') {
                array_push($stackBrackets, $currentChar);
            }
            elseif($currentChar === ')' || $currentChar === '}' || $currentChar === ']') {
                if (empty($stackBrackets) || array_pop($stackBrackets) !== $matchingBrackets[$currentChar]) {
                    return false;
                }
            }
        }
        return empty($stackBrackets);
    }
}