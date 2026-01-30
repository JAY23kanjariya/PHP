<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>04 largest Number among three number</title>
</head>

<body>
    <h1>4. Write a program to find the largest among three numbers.</h1>
    <hr>
    <form action="" method="get">
        <input type="number" name="numberOne" placeholder="Enter Number" required>
        <input type="number" name="numberTwo" placeholder="Enter Number" required>
        <input type="number" name="numberThree" placeholder="Enter Number" required>
        <input type="submit" value="Find Largest Number" name="largest">
        <a href="./index.html"><input type="button" value="Back" ></a>
    </form>
</body>

</html>

<?php

function largestNumber($numberOne, $numberTwo, $numberThree)
{
    $max = $numberOne;

    if ($numberTwo > $max) {
        $max = $numberTwo;
    }
    if ($numberThree > $max) {
        $max = $numberThree;
    }
    return $max;
}
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['largest'])) {
    $numberOne = (int)$_GET['numberOne'];
    $numberTwo = (int)$_GET['numberTwo'];
    $numberThree = (int)$_GET['numberThree'];
    echo "<br> <h2> Result : " . largestNumber($numberOne, $numberTwo, $numberThree) . " largest Number</h2>";
}
