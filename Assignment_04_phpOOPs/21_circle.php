<?php
class Circle
{
    private int $radius;

    public function __construct($radius = 0)
    {
        $this->radius = $radius;
    }
    public function circum()
    {
        $cirCum = round(2 * pi() * $this->radius);
        echo "Circumference of Circle : $cirCum <br>";
    }
}

$circle = new Circle(10);
echo "Radius = 10 <br>";
$circle->circum();
