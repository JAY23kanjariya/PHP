<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BST</title>
</head>

<body>
    <form action="" method="get">
        <input type="number" name="search" required placeholder="search number">
    </form>
</body>

</html>

<?php
// binary search tree
require_once __DIR__ . "/DisplayArray.php";

function binarySearchTree(&$arr, $search, $start, $end)
{
    if ($start <= $end) {
        // calculate mid
        $mid = intdiv(($start + $end), 2);

        // mid element is equal to search
        if ($arr[$mid] == $search) {
            return $mid;
        } else if ($arr[$mid] > $search) {
            // mid element is smaller than search
            return binarySearchTree($arr, $search, $start, $mid - 1);
        } else {
            // mid element is larger than search
            return binarySearchTree($arr, $search, $mid + 1, $end);
        }
    }

    return -1;
}

$arr = array(10, 20, 30, 40, 50, 60, 70, 80, 90, 100);
display($arr);

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['search'])) {
    $search = $_GET['search'];

    $idx = binarySearchTree($arr, $search, 0, count($arr) - 1);
    echo "Index : <b>" . $idx . "</b><br>";
}
