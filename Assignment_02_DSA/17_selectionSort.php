<?php
// selection sort : (n^2)
require_once __DIR__ . "/DisplayArray.php";

function selectionSort(&$arr)
{
    for ($outer = 0; $outer < (count($arr) - 1); $outer++) {
        $min_index = $outer;

        for ($inner = $outer + 1; $inner < count($arr); $inner++) {

            if ($arr[$min_index] > $arr[$inner]) {
                $min_index = $inner;
            }
        }
        swap($arr,$min_index,$outer);
    }
}
function swap(&$arr, $var_one, $var_two)
{
    $temp = $arr[$var_one];
    $arr[$var_one] = $arr[$var_two];
    $arr[$var_two] = $temp;
}

echo "<b>Selection Sort </b><br>";

$arr = array(56, 45, 24, 04, 34, 35);
display($arr);

echo "after sorting<br>";
selectionSort($arr);

display($arr);
