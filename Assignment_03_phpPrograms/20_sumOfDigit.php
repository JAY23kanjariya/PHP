<?php
echo "<h1>20. Write a program to find the sum of the digits of a number</h1><hr>";

function sumOfDigit($number)
{
    $original = $number;
    $result = 0;
    while ($number > 0) {
        $lastDigit = $number % 10;
        $number = intdiv($number, 10);
        $result += $lastDigit;
    }
    echo " Sum of Digit for $original is $result";
}

sumOfDigit(123);
echo '<br><a href="./index.html"><input type="button" value="Back" ></a>';