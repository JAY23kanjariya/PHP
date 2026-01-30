<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>

<body>
    <h1>11. Write a program to implement a simple calculator using switch case.
    </h1>
    <hr>
    <form action="" method="get">
        <input type="number" name="numberOne" placeholder="Enter Number" required>
        <select name="operation">
            <option value="Addition">Addition(+)</option>
            <option value="Subtraction">Subtraction(-)</option>
            <option value="Multiplication">Multiplication(*)</option>
            <option value="Division">Division(/)</option>
        </select>
        <input type="number" name="numberTwo" placeholder="Enter Number" required>
        <input type="submit" value="Calculate" name="Calculate">
        <a href="./index.html"><input type="button" value="Back"></a>
    </form>
</body>

</html>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['Calculate'])) {
    $numberOne = (int)$_GET['numberOne'];
    $opeartionType = (string)$_GET['operation'];
    $numberTwo = (int)$_GET['numberTwo'];
    echo " <br><h2> Result : ";

    switch ($opeartionType) {
        case 'Addition':
            echo $numberOne + $numberTwo;
            break;
        case 'Subtraction':
            echo $numberOne - $numberTwo;
            break;
        case 'Multiplication':
            echo $numberOne * $numberTwo;
            break;
        case 'Division':
            echo $numberOne / $numberTwo;
            break;
        default:
            echo "Not Selected any operation";
    }
    echo " </h2>";
}
