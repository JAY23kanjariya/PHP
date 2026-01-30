<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>factorial</title>
</head>

<body>
    <h1>6. Write a program to find the factorial of a given number using recursion.
    </h1>
    <hr>
    <form action="" method="get">
        <input type="number" name="number" placeholder="Enter Number" required>
        <input type="submit" value="Calculate Factorial" name="factorial">
        <a href="./index.html"><input type="button" value="Back"></a>
    </form>
</body>

</html>

<?php

function factorial($number)
{
    // base condition
    if ($number === 0 || $number === 1) {
        return 1;
    }
    return $number * factorial($number - 1);
}
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['factorial'])) {
    $number = (int)$_GET['number'];
    echo "<br><h2>Factorial of $number is " . factorial($number) . "</h2>";
}
