<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function increasingTriplet($nums) {
        $first = PHP_INT_MAX;
        $second = PHP_INT_MAX;

        foreach ($nums as $num) {
            if ($num <= $first) {
                $first = $num;
            }
            elseif ($num <= $second) {
                $second = $num;
            }
            else {
                return true;
            }
        }

        return false;
    }
}

// Example usage:
$solution = new Solution();
$nums = [1, 2, 3, 4, 5];
$result = $solution->increasingTriplet($nums);
var_dump($result); // Output: true