<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reverse String</title>
</head>

<body>
    <h1>7. Write a program to reverse a string entered by the user.</h1>
    <hr>
    <form action="" method="get">
        <input type="text" name="givenString" placeholder="Enter a String " required>
        <input type="submit" value="Reverse String" name="reverse">
        <a href="./index.html"><input type="button" value="Back"></a>
    </form>
</body>

</html>

<?php
function reverseString($givenStr)
{
    for ($iterator = strlen($givenStr) - 1; $iterator >= 0; $iterator--) {
        echo "$givenStr[$iterator] ";
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['reverse'])) {
    $givenStr = (string)$_GET['givenString'];
    reverseString($givenStr);
}
