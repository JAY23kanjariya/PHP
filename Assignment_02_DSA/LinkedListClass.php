<?php
// creating a node[class]
class Node
{
    public $data;
    public $next;

    // initial node
    public function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
    }
}

// linked list [class]
class Linkedlist
{
    private $front = null;
    private $rear = null;

    // insert function
    public function insert($data)
    {
        $newNode = new Node($data);

        if ($this->rear == null) {
            $this->rear = $this->front = $newNode;
            echo "Inserted : " . $this->rear->data . "<br>";
            return;
        }

        $this->rear->next = $newNode;
        $this->rear = $newNode;

        echo "Inserted : " . $this->rear->data . "<br>";
    }

    // delete function
    public function delete()
    {
        if ($this->front == null) {
            echo "Empty Linked List !!!<br>";
            return;
        }

        $removed = $this->front->data;
        $this->front = $this->front->next;

        if ($this->front == null) {
            $this->rear = null;
        }

        echo "Deleted : " . $removed . "<br>";
    }

    // display function 
    public function display()
    {
        if ($this->front == null) {
            echo "Empty Linked List !!!<br>";
            return;
        }
        echo "Elements : ";
        $curr = $this->front;
        while ($curr != null) {
            echo $curr->data . " => ";
            $curr = $curr->next;
        }
        echo "null <br>";
    }

    // reverse function
    public function reverse()
    {
        $prev = null;
        $curr = $this->front;
        $next = null;

        while ($curr != null) {
            $next = $curr->next;
            $curr->next = $prev;
            $prev = $curr;
            $curr = $next;
        }
        $this->front = $prev;
    }
}
