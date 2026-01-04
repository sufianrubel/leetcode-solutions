<?php

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseWords($s) {
        // Remove leading and trailing spaces
        $s = trim($s);

        // Split the string into words (handles multiple spaces)
        $words = preg_split('/\s+/', $s);

        // Reverse the order of words
        $words = array_reverse($words);

        // Join words with a single space
        return implode(' ', $words);
    }
}

// Example usage:
$solution = new Solution();
$s = "  hello world  ";
$result = $solution->reverseWords($s);
echo $result; // Output: "world hello"