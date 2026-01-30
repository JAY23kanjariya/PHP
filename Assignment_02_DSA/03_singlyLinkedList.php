<?php
   require_once "./LinkedListClass.php";
    echo "<h2>Queue using Linked List</h2>";
    $queue = new Linkedlist();
    $queue->insert(10);
    $queue->insert(20);
    $queue->display();
    $queue->delete();
    $queue->display();
    $queue->delete();
    $queue->display();
    $queue->delete();
?>