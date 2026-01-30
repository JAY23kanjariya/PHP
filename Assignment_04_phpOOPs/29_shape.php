<?php

abstract class Shape
{
    public int $firstInteger;
    public int $secondInteger;

    public function __construct(int $a, int $b = 0)
    {
        $this->firstInteger = $a;
        $this->secondInteger = $b;
    }

    abstract public function printArea();
}

class Rectangle extends Shape
{
    public function printArea()
    {
        echo " Area of Rectangle : " . ($this->firstInteger * $this->secondInteger) . "\n";
    }
}

class Triangle extends Shape
{
    public function printArea()
    {
        echo " Area of Triangle : " . (0.5 * $this->firstInteger * $this->secondInteger ). "\n";
    }
}

class Circle extends Shape
{
    public function printArea()
    {
        echo " Area of Circle : " .(pi()* ($this->firstInteger**2)) . "\n";
    }
}
$c1 = new Circle(10);
$c1->printArea();
$r1 = new Rectangle(10,10);
$r1->printArea();
$t1 = new Triangle(10,10);
$t1->printArea();