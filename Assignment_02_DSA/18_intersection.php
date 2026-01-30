<?php
require_once __DIR__ . "/DisplayArray.php";
$arr1 = [3, 4, 5, 5, 6, 7];
$arr2 = [1, 2, 3, 3, 4, 4];

$index_arr1 = 0;
$index_arr2 = 0;

$common = [];

while ($index_arr1 < count($arr1) && $index_arr2 < count($arr2)) {
    if ($arr1[$index_arr1] == $arr2[$index_arr2]) {
        $common[] = $arr1[$index_arr1];
        $index_arr1++;
        $index_arr2++;
    } else if ($arr1[$index_arr1] < $arr2[$index_arr2]) {
        $index_arr1++;
    } else {
        $index_arr2++;
    }
}

display($common);
