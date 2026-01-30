<?php
// merge sort : (nlogn)
require_once __DIR__ . "/DisplayArray.php";

function mergeSort(&$arr, $start, $end)
{
    if ($start < $end) {
        // calculate mid 
        $mid = intdiv($start + $end, 2);

        // calling mergeSort for left-half of mid
        mergeSort($arr, $start, $mid);
        // calling mergeSort for right-half of mid
        mergeSort($arr, $mid + 1, $end);

        // merge the elements
        merge($arr, $start, $mid, $end);
    }
}

function merge(&$arr, $start, $mid, $end)
{
    // Create temporary arrays for left and right halves
    $left = array_slice($arr, $start, $mid - $start + 1);
    $right = array_slice($arr, $mid + 1, $end - $mid);

    // Merge the temp arrays back into arr
    $left_index = 0;  // Initial index of left subarray
    $right_index = 0;  // Initial index of right subarray
    $merge_index = $start;  // Initial index of merged subarray

    while ($left_index < count($left) && $right_index < count($right)) {
        if ($left[$left_index] <= $right[$right_index]) {
            $arr[$merge_index++] = $left[$left_index++];
        } else {
            $arr[$merge_index++] = $right[$right_index++];
        }
    }

    // Copy remaining elements from left array
    while ($left_index < count($left)) {
        $arr[$merge_index++] = $left[$left_index++];
    }

    // Copy remaining elements from right array
    while ($right_index < count($right)) {
        $arr[$merge_index++] = $right[$right_index++];
    }
}


echo "<b>Merge Sort </b><br>";

$arr = array(56, 45, 24, 04, 34, 34, 46, 455, 3, 24, 465);
display($arr);

echo "after sorting<br>";

mergeSort($arr, 0, count($arr) - 1);
display($arr);
