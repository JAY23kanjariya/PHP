<?php
// bubble sort : (n^2)
require_once __DIR__ . "/DisplayArray.php";

function bubbleSort(&$arr)
{
    for ($outer = 0; $outer < (count($arr) - 1); $outer++) {
        $isSorted = false;
        for ($inner = 0; $inner < (count($arr) - 1 - $outer); $inner++) {
            if ($arr[$inner] > $arr[$inner + 1]) {
                // swap
                $isSorted = true;
                swap($arr, $inner, $inner + 1);
            }
        }
        if ($isSorted == false) {
            echo "array is already sorted.<br>";
            break;
        }
    }
}

function swap(&$arr, $var_one, $var_two)
{
    $temp = $arr[$var_one];
    $arr[$var_one] = $arr[$var_two];
    $arr[$var_two] = $temp;
}

echo "<b>Bubble Sort </b><br>";

$arr = array(56, 45, 24, 04, 34, 35);
display($arr);

echo "after sorting<br>";
bubbleSort($arr);

display($arr);
