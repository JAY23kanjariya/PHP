<?php
function swap(&$firstNumber, &$secondNumber)
{
    $temp = $firstNumber;
    $firstNumber = $secondNumber;
    $secondNumber = $temp;
}
echo "<h1>10. Write a program to swap two numbers using pointers.</h1><hr>";

$firstNumber = 10;
$secondNumber = 20;
echo "first Number : $firstNumber & second Number : $secondNumber <br>";
echo "<b>After Swaping</b>: using pointer(&) <br>";

swap($firstNumber, $secondNumber);
echo "first Number : $firstNumber & second Number : $secondNumber <br>";
echo '<br><a href="./index.html"><input type="button" value="Back" ></a>';
