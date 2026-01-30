<?php
// heap sort
require_once __DIR__ . "/DisplayArray.php";

// Build max heap
function buildMaxHeap(&$arr, $n) {
    // Start from last non-leaf node
    for ($i = intdiv($n, 2) - 1; $i >= 0; $i--) {
        heapify($arr, $n, $i);
    }
}

// Heapify a subtree rooted at index i
function heapify(&$arr, $n, $i) {
    $largest = $i;
    $left = 2 * $i + 1;      // Left child
    $right = 2 * $i + 2;     // Right child

    // If left child is larger than root
    if ($left < $n && $arr[$left] > $arr[$largest]) {
        $largest = $left;
    }

    // If right child is larger than largest so far
    if ($right < $n && $arr[$right] > $arr[$largest]) {
        $largest = $right;
    }

    // If largest is not root, swap and heapify
    if ($largest != $i) {
        $temp = $arr[$i];
        $arr[$i] = $arr[$largest];
        $arr[$largest] = $temp;

        heapify($arr, $n, $largest);
    }
}

function heapSort(&$arr) {
    $n = count($arr);

    // Build max heap
    buildMaxHeap($arr, $n);

    // Extract elements one by one from heap
    for ($i = $n - 1; $i > 0; $i--) {
        // Move current root (maximum) to end
        $temp = $arr[0];
        $arr[0] = $arr[$i];
        $arr[$i] = $temp;

        // Call heapify on reduced heap
        heapify($arr, $i, 0);
    }
}

echo "<b>Heap Sort </b><br>";

$arr = array(56, 45, 24, 04, 34, 35);
display($arr);

echo "after sorting<br>";
heapSort($arr);

display($arr);
