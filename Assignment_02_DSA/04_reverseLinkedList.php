<?php
require_once "./LinkedListClass.php";
    $reverseList = new Linkedlist();
    $reverseList->insert(10);
    $reverseList->insert(20);
    $reverseList->insert(30);
    echo "<h2>Original Linked List</h2>";
    $reverseList->display();
    $reverseList->reverse();
    echo "<h2>Reversed Linked List</h2>";
    $reverseList->display();
?>