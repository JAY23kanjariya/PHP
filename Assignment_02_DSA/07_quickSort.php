<?php
require_once __DIR__ . "/DisplayArray.php";

function quickSort(&$arr, $start, $end)
{
    if ($start < $end) {
        // calculate the pivot
        $pivot = partition($arr, $start, $end);

        // calculate for left-way of pivot
        quickSort($arr, $start, $pivot - 1);
        // calculate for right-half of pivot
        quickSort($arr, $pivot + 1, $end);
    }
}

function partition(&$arr, $start, $end)
{
    // assuming pivot is at end of the array
    $pivot = $arr[$end];

    // index
    $index = $start - 1;

    for ($curr = $start; $curr < $end; $curr++) {
        if ($arr[$curr] < $pivot) {
            $index++;
            swap($arr, $curr, $index);
        }
    }
    swap($arr, $index + 1, $end);
    return $index + 1;
}

function swap(&$arr, $var_one, $var_two)
{
    $temp = $arr[$var_one];
    $arr[$var_one] = $arr[$var_two];
    $arr[$var_two] = $temp;
}
// quick sort : worst(n^2)
echo "<b>Quick Sort </b><br>";

$arr = array(56, 45, 24, 04, 34, 34, 46, 55, 3, 24, 65);
display($arr);

echo "after sorting<br>";

quickSort($arr, 0, count($arr) - 1);
display($arr);
