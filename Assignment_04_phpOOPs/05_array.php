<?php
echo "Write a class Array that contains an array of integers store five values. 
It also contains the following member functions:
• The fill() function is used to fill the array with values from user
• The display() function is used to display the values of array
• The max() function shows the maximum value in the array
• The min() function shows the minimum value in the array
All the member function should be defined outside class. In main 
function, create an object of type Array and make use of all member 
functions<hr>";

class Arrays
{
    private $myArray = [];

    public function fill($values)
    {
        for ($iterator = 0; $iterator < count($values); $iterator++) {
            $this->myArray[$iterator] = $values[$iterator];
        }
    }

    public function display()
    {
        echo "Array Elements : ";
        foreach ($this->myArray as $value) {
            echo "$value ";
        }
        echo "<br>";
    }

    public function max()
    {
        return max($this->myArray);
    }

    public function min()
    {
        return min($this->myArray);
    }
}

$newArr = new Arrays();
$newArr->fill([10, 20, 30, 40, 50]);
$newArr->display();
echo "Max value  : " . $newArr->max() . "<br>";
echo "Min value  : " . $newArr->min() . "<br>";
