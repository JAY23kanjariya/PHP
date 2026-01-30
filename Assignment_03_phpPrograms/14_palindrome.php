<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>check palindrome for given string</title>
</head>

<body>
    <h1>14. Write a program to check if a given string is a palindrome.</h1>
    <hr>
    <form action="" method="get">
        <input type="text" name="givenString" placeholder="Enter a String " required>
        <input type="submit" value="Check Palindrome" name="palindrome">
        <a href="./index.html"><input type="button" value="Back"></a>
    </form>
</body>

</html>

<?php
function palindrome($str): bool
{
    $firstIndex = 0;
    $lastIndex = strlen($str) - 1;
    for ($iterator = 0; $iterator <= (int)(strlen($str) / 2); $iterator++) {
        if ($str[$firstIndex++] !== $str[$lastIndex--]) {
            return false;
        }
    }
    return true;
}

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['palindrome'])) {
    $givenStr = (string)$_GET['givenString'];
    echo "<br><h2> Given string is : ";
    if (palindrome($givenStr)) echo "Palindrome";
    else echo " Not Palindrome";
    echo " </h2>";
}
