<?php
require_once __DIR__ ."/DisplayArray.php";

    // insertion Sort : (n^2)
function insertionSort(&$arr)
{
    for ($outer = 1; $outer < count($arr); $outer++) {

        $element = $arr[$outer];
        $inner = $outer - 1;

        while ($inner >= 0 && $arr[$inner] > $element) {
            //swap 
            $arr[$inner + 1] = $arr[$inner];
            $inner--;
        }
        $arr[$inner + 1] = $element;
    }
}

// insertionSort
echo "<b>Insertion Sort </b><br>";

$arr = array(56, 45, 24, 04, 34, 34, 46, 455, 3, 24, 465);
display($arr);

echo "after sorting<br>";

insertionSort($arr);
display($arr);
