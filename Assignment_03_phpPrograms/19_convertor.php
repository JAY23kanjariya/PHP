<?php
echo "<h1>19. Write a program to convert binary to decimal and vice versa.</h1><hr>";

function binaryToDecimal($number)
{
    $decimal = 0;
    $base = 1;
    $original = $number;
    while ($number > 0) {
        $lastDigit = $number % 10;
        $number = intdiv($number, 10);
        $decimal += $lastDigit * $base;
        $base *= 2;
    }

    echo "<br>Decimal value of $original : $decimal";
}

function decimalToBinary($number){
    $original = $number;
    $result = 0;
    $power = 1;
    while($number > 0){
        $lastDigit = $number % 2;
        $number = intdiv($number,2);
        $result += $lastDigit * $power;
        $power *= 10;
    }
    echo "<br>Binary value of $original : $result";
}

binaryToDecimal(10);
decimalToBinary(10);
echo '<br><a href="./index.html"><input type="button" value="Back" ></a>';
