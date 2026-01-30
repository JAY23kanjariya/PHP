<?php
echo "<h1>18. Write a program to find the transpose of a matrix.</h1><hr>";
function display(&$arr)
{
    echo "Array Elements : <br>";
    foreach ($arr as $outer) {
        foreach ($outer as $item) {
            echo "$item ";
        }
        echo "<br>";
    }
}

function transpose(&$arr)
{
    $result = [];
    for ($outer = 0; $outer < count($arr); $outer++) {
        for ($inner = 0; $inner < count($arr[0]); $inner++) {
            $result[$inner][$outer] = $arr[$outer][$inner];
        }
    }
    echo "<b>after Transpose</b><br>";
    display($result);
}
$transMatrix = array(
    array(10, 20, 30),
    array(40, 50, 60),
    array(70, 80, 90)
);

display($transMatrix);
transpose($transMatrix);
echo '<br><a href="./index.html"><input type="button" value="Back" ></a>';

