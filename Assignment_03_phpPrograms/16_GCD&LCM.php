<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate GCD & LCM</title>
</head>

<body>
    <h1>16. Write a program to find the GCD and LCM of two numbers.
    </h1>
    <hr>
    <form action="" method="get">
        <input type="number" name="numberOne" placeholder="Enter Number" required>
        <input type="number" name="numberTwo" placeholder="Enter Number" required>
        <input type="submit" value="Calculate" name="Calculate">
        <a href="./index.html"><input type="button" value="Back"></a>
    </form>
</body>

</html>

<?php
function GCD($numberOne, $numberTwo): int
{
    while ($numberTwo != 0) {
        $temp = $numberTwo;
        $numberTwo = $numberOne % $numberTwo;
        $numberOne = $temp;
    }
    return $numberOne;
}
function LCM($numberOne, $numberTwo): int
{
    return ($numberOne * $numberTwo) / GCD($numberOne, $numberTwo);
}
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['Calculate'])) {
    $numberOne = (int)$_GET['numberOne'];
    $numberTwo = (int)$_GET['numberTwo'];
    echo "<br>firstNumber : $numberOne & secondNumber : $numberTwo";
    echo "<br><h2> GCD : " . GCD($numberOne, $numberTwo) . " and LCM : " . LCM($numberOne, $numberTwo) . "</h2>";
}
