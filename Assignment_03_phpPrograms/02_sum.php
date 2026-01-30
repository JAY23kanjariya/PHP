<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>02 sum of two numbers</title>
</head>

<body>
    <h1>2. Write a program to calculate the sum of two numbers entered by the user.</h1>
    <hr>
    <form action="" method="get">
        <input type="number" name="numberOne" placeholder="Enter Number" required>
        <input type="number" name="numberTwo" placeholder="Enter Number" required>
        <input type="submit" value="Sum" name="Sum">
        <a href="./index.html"><input type="button" value="Back" ></a>
    </form>
</body>

</html>

<?php

function sum($numberOne, $numberTwo)
{
    return (int) ($numberOne + $numberTwo);
}
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['Sum'])) {
    $numberOne = (int)$_GET['numberOne'];
    $numberTwo = (int)$_GET['numberTwo'];
    echo "<br> <h2> Result : " . sum($numberOne, $numberTwo) . "</h2>";
}
