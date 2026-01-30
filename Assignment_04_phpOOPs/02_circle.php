<?php
echo "Write a class Circle with one data member radius. Write three member 
functions setRadius() to set radius value with parameter value, area() to 
calculate and display area of circle and circum() to calculate and display 
circumference of circle. Also write the constructor for this class that 
initialises all data members to zero. In main function, create an object and 
make use of all functions<hr>";

class Circle
{
    private $radius;

    public function __construct()
    {
        $this->radius = 0;
    }

    public function setRadius($circleRadius)
    {
        $this->radius = $circleRadius;
    }

    public function area()
    {
        $area = round(2 * pi() * ($this->radius ** 2));
        echo "Area of Circle : $area <br>";
    }

    public function circum()
    {
        $cirCum = round(2 * pi() * $this->radius);
        echo "Circumference of Circle : $cirCum <br>";
    }
}

$circle = new Circle();
$circle->setRadius(10);
echo "Radius = 10 <br>";
$circle->area();
$circle->circum();
