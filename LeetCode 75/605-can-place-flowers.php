<?php

class Solution {

    function canPlaceFlowers($flowerbed, $n) {

        $len = count($flowerbed);

        for ($i = 0; $i < $len; $i++) {

            // If current plot is empty
            if ($flowerbed[$i] == 0) {

                // Check left and right plots
                $leftEmpty  = ($i == 0) || ($flowerbed[$i - 1] == 0);
                $rightEmpty = ($i == $len - 1) || ($flowerbed[$i + 1] == 0);

                // Plant flower if both sides are empty
                if ($leftEmpty && $rightEmpty) {
                    $flowerbed[$i] = 1;
                    $n--;

                    if ($n == 0) return true;
                }
            }
        }

        return $n <= 0;
    }
}

// Example usage:
$solution = new Solution();
$flowerbed = [1,0,0,0,1];
$n = 1;
$result = $solution->canPlaceFlowers($flowerbed, $n);
var_dump($result); // Output: true