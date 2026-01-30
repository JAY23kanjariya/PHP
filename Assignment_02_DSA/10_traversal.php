<?php

require_once __DIR__ . "/Graph.php";

$root = new Node(10);
$root->insertBST($root,20);
$root->insertBST($root,9);
$root->insertBST($root,6);
$root->insertBST($root,7);
$root->insertBST($root,40);
$root->insertBST($root,30);

echo " Binary Tree : <br>";
echo "<br> Pre-Order : ";
preOrder($root);

echo "<br> In-Order : ";
inOrder($root);

echo "<br> Post-Order : ";
postOrder($root);

