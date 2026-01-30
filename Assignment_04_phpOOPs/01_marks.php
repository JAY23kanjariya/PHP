<?php
echo "Write a class Marks with three data members to store three marks. Write 
three member functions in() to input, sum() to calculate and return the 
sum and avg() to calculate and return the average marks. Also write the 
constructor for this class that initialises all data members to zero. In main 
function, create an object and make use of all functions<hr>";

class Marks
{
    // three data memebers
    private $marksOne;
    private $markTwo;
    private $markThree;

    // constructor
    public function __construct()
    {
        $this->marksOne = 0;
        $this->markTwo = 0;
        $this->markThree = 0;
    }

    // in() function to assign marks
    public function in($one, $two, $three)
    {
        $this->marksOne = $one;
        $this->markTwo = $two;
        $this->markThree = $three;
    }

    // sum() to calculate the sum
    public function sum(): int
    {
        return $this->marksOne + $this->markTwo + $this->markThree;
    }

    //avg() to calculate the avg
    public function avg(): int
    {
        return round(($this->sum() / 3));
    }
}

// create object of class Marks
$student = new Marks();

$student->in(70,35,65);
echo "Sum : ".$student->sum()."<br>";
echo "Avg : ".$student->avg()."<br>";
