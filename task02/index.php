<?php 
function searchInsert($nums, $target) {
    // Sort the array
    sort($nums);
    
    // Binary search to find the target or the position to insert
    $left = 0;
    $right = count($nums) - 1;
    
    while ($left <= $right) {
        $mid = $left + floor(($right - $left) / 2);
        
        if ($nums[$mid] == $target) {
            return $mid;
        } elseif ($nums[$mid] < $target) {
            $left = $mid + 1;
        } else {
            $right = $mid - 1;
        }
    }
    
    // If target is not found, return the index where it would be if it were inserted in order
    return $left;
}

// Test cases
$nums1 = [1, 7, 3, 5, 6, 9, 15];
$target1 = 5;
echo "Test Case 1: " . searchInsert($nums1, $target1) . "\n";

$nums2 = [5, 6, 1, 3];
$target2 = 2;
echo "Test Case 2: " . searchInsert($nums2, $target2) . "\n";

$nums3 = [1, 3, 5, 6];
$target3 = 7;
echo "Test Case 3: " . searchInsert($nums3, $target3) . "\n";