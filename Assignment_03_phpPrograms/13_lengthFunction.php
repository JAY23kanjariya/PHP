<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function to find the length of given string</title>
</head>

<body>
    <h1>13. Write a program to find the length of a string without using built-in functions.</h1>
    <hr>
    <form action="" method="get">
        <input type="text" name="givenString" placeholder="Enter a String " required>
        <input type="submit" value="Calculate Length" name="length">
        <a href="./index.html"><input type="button" value="Back"></a>
    </form>
</body>

</html>

<?php
function lengthFunction($givenStr)
{
    $countLetters = 0;
    for ($iterator = 0; $givenStr[$iterator] != '|'; $iterator++) {
        $countLetters++;
    }
    return $countLetters;
}

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['length'])) {
    $givenStr = (string)$_GET['givenString'] . "|";
    echo "<br><h2> Length of |$givenStr : " . lengthFunction($givenStr) . "</h2>";
}
