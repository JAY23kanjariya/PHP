<?php
// circular queue
class CircularQueue
{
    private $queue;
    private $size;
    private $front;
    private $rear;

    public function __construct($size)
    {
        $this->size = $size;
        $this->queue = array_fill(0, $size, 0);
        $this->front = $this->rear = -1;
    }

    public function enqueue($data)
    {
        if (($this->rear + 1) % $this->size == $this->front) {
            echo " Queue overflow.<br>";
            return;
        }

        if ($this->front == -1) {
            $this->front = 0;
        }

        $this->rear = ($this->rear + 1) % $this->size;
        $this->queue[$this->rear] = $data;
        echo "Inserted : $data <br>";
    }

    public function dequeue()
    {
        if ($this->front == -1) {
            echo "Queue underflow.<br>";
            return;
        }
        $removed = $this->queue[$this->front];

        if ($this->front == $this->rear) {
            $this->front = $this->rear = -1;
        }

        $this->front = ($this->front + 1) % $this->size;
        echo " deleted : $removed <br>";
    }

    public function display()
    {
        if ($this->front == -1) {
            echo "Queue underflow.<br>";
            return;
        }

        echo "Queue Elements : ";
        $temp = $this->front;
        while (true) {
            echo $this->queue[$temp] . " ";
            if ($temp == $this->rear) break;
            $temp = ($temp + 1) % $this->size;
        }
        echo "<br>";
    }
}

$circularQueue = new CircularQueue(3);
$circularQueue->enqueue(10);
$circularQueue->enqueue(20);
$circularQueue->enqueue(30);
$circularQueue->enqueue(40);
$circularQueue->display();
$circularQueue->dequeue();
$circularQueue->dequeue();
$circularQueue->enqueue(40);
$circularQueue->display();
