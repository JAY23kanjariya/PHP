<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fibonacci Series</title>
</head>

<body>
    <h1>5. Write a program to print the Fibonacci series up to n terms.
    </h1>
    <hr>
    <form action="" method="get">
        <input type="number" name="number" placeholder="Enter Number" required>
        <input type="submit" value="fibonacci Series" name="fibonacci">
        <a href="./index.html"><input type="button" value="Back"></a>
    </form>
</body>

</html>

<?php

function fibonacci($number)
{
    $firstNumber = 0;
    $secondNumber = 1;
    echo "<br><h2> Fibonacci Series : $firstNumber $secondNumber";
    for ($iterator = 2; $iterator < $number; $iterator++) {
        $thirdNumber = $firstNumber + $secondNumber;
        echo " $thirdNumber";
        $firstNumber = $secondNumber;
        $secondNumber = $thirdNumber;
    }
    echo "</h2>";
}
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['fibonacci'])) {
    $number = (int)$_GET['number'];
    fibonacci($number);
}
