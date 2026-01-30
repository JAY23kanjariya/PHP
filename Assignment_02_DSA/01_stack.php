<?php
require_once __DIR__ . "/DisplayArray.php";
// stack using array
class Stack
{
    private $stack = array();
    private $maxSize;

    // constructor for initial maxSize
    public function __construct($size)
    {
        $this->maxSize = $size;
    }

    // push function
    public function push($value)
    {
        if (count($this->stack) >= $this->maxSize) {
            echo "Stack overflow!<br>";
        } else {
            array_push($this->stack, $value);
            echo "$value pushed.<br>";
        }
    }

    //pop function
    public function pop()
    {
        if (empty($this->stack)) {
            echo "Stack underflow<br>";
        } else {
            $item = array_pop($this->stack);
            echo "$item popped.<br>";
        }
    }

    //peek function
    public function peek()
    {
        if (empty($this->stack)) {
            echo "Stack underflow<br>";
        } else {
            echo "Top of Stack :" . end($this->stack) . "<br>";
        }
    }

    // display function
    public function print(){
        return display($this->stack);
    }
}

echo "<h2>Stack using Array</h2>";

$topOfStack = new Stack(3);
$topOfStack->push(10);
$topOfStack->push(20);
$topOfStack->push(30);
$topOfStack->push(30);
$topOfStack->print();
$topOfStack->peek();
$topOfStack->pop();
$topOfStack->peek();
$topOfStack->pop();
$topOfStack->peek();
$topOfStack->pop();
$topOfStack->peek();

