<?php

$numArray = array(10, 20, 30, 40, 50, 60, 70, 9);

echo " <h1>8. Write a program to find the sum and average of an array of numbers.
</h1><hr>";

echo "Array Elements : ";
foreach ($numArray as $item) {
    echo "$item ";
}

sumAvg($numArray);

function sumAvg(&$arr)
{
    echo "<br>Sum of Elements : " . array_sum($arr) . " and Average : " . array_sum($arr) / count($arr);
    echo '<br><a href="./index.html"><input type="button" value="Back" ></a>';
}
