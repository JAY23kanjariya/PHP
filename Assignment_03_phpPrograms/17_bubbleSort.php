<?php
echo "<h1>17. Write a program to implement bubble sort.</h1><hr>";

function bubbleSort(&$arr)
{
    for ($outer = 0; $outer < (count($arr) - 1); $outer++) {
        
        for ($inner = 0; $inner < (count($arr) - 1 - $outer); $inner++) {
            if ($arr[$inner] > $arr[$inner + 1]) {
                // swap
                
                swap($arr, $inner, $inner + 1);
            }
        }
        
    }
}
function swap(&$arr, $var_one, $var_two)
{
    $temp = $arr[$var_one];
    $arr[$var_one] = $arr[$var_two];
    $arr[$var_two] = $temp;
}

function display(&$arr)
{
    echo "<br>Array Elements : ";
    foreach ($arr as $nums) {
        echo "$nums ";
    }
}
$arr = [11, 10, 1, 2, 4];
display($arr);
bubbleSort($arr);
display($arr);

echo '<br><a href="./index.html"><input type="button" value="Back" ></a>';

