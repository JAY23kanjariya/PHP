<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>03 check Even or Odd</title>
</head>

<body>
    <h1>3. Write a program to check if a given number is even or odd.</h1>
    <hr>
    <form action="" method="get">
        <input type="number" name="number" placeholder="Enter Number" required>
        <input type="submit" value="Check Number" name="check">
        <a href="./index.html"><input type="button" value="Back" ></a>
    </form>
</body>

</html>

<?php

function check($number)
{
    return $number . "is" . ($number % 2 === 0) ? "Even" : "Odd" . " Number.";
}
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['check'])) {
    $number = (int)$_GET['number'];
    echo "<br> <h2> Result : " . check($number) . "</h2>";
}
