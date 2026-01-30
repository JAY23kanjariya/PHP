<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Count Number of Vowels in given String</title>
</head>

<body>
    <h1>9. Write a program to count the number of vowels in a given string.</h1>
    <hr>
    <form action="" method="get">
        <input type="text" name="givenString" placeholder="Enter a String " required>
        <input type="submit" value="Count Vowels" name="countVowels">
        <a href="./index.html"><input type="button" value="Back"></a>
    </form>
</body>

</html>

<?php
function countVowels($givenStr): int
{
    return preg_match_all("/[aeiou]/i", $givenStr);
}

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['countVowels'])) {
    $givenStr = (string)$_GET['givenString'];
    echo "<h2>Number of Vowels in '$givenStr' : " . countVowels($givenStr) . "</h2>";
}
