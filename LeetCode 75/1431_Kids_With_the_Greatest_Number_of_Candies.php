<?php

class Solution {

    /**
     * @param Integer[] $candies
     * @param Integer $extraCandies
     * @return Boolean[]
     */
    function kidsWithCandies($candies, $extraCandies) {
        $result = [];
        
        // Step 1: Find the maximum candies any kid currently has
        $maxCandies = max($candies);
        
        // Step 2: Check for each kid if candies[i] + extraCandies >= maxCandies
        foreach ($candies as $candy) {
            $result[] = ($candy + $extraCandies) >= $maxCandies;
        }
        
        return $result; 
    }
}

// Example usage:
$candies = [2, 3, 5, 1, 3];
$extraCandies = 3;

$solution = new Solution();
$result = $solution->kidsWithCandies($candies, $extraCandies);
print_r($result);
