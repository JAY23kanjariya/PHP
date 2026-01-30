<?php
echo "Write a class Result that contains rollNo, name and marks of three 
subjects. The marks are stored in an array of integers. The class also 
contains following member functions:
• The input() function is used to input values of data members
• The show() function is used to display the values of data members
• The total() function returns the total marks of a student
• The avg() function returns the average marks of a student
The program should create an object of this class and make use of all 
member functions<hr>";

class Result
{
    private $rollno;
    private $name;
    private $marks = [];

    public function input($rollno, $name, $marks)
    {
        $this->rollno = $rollno;
        $this->name = $name;
        $this->marks = $marks;
    }

    public function show()
    {
        echo "<b>Student Details </b><br>";
        echo "Roll No. : $this->rollno <br>";
        echo "Name : $this->name <br>";
        echo " Marks : ";
        foreach ($this->marks as $mark) {
            echo "$mark ";
        }
        echo "<br>";
    }

    public function total() : int
    {
        return array_sum($this->marks);
    }

    public function avg() : int
    {
        return round($this->total() / count($this->marks));
    }
}

$student = new Result();
$student->input(7025, "jay kanjariya", [90, 89, 87]);
$student->show();
echo "Total marks : " . $student->total()."<br>";
echo "Average marks : " . $student->avg();
