<?php
interface Polygon
{
    public function getArea();
    public function getSides();
}

class Rectangle implements Polygon{
    private int $height;
    private int $width;

    public function __construct($height=0,$width=0)
    {
        $this->height = $height;
        $this->width =$width;
    }
    public function getArea(){
        return $this->height * $this->width;
    }

    public function getSides()
    {
        return 4;
    }
}

class Square implements Polygon{
    private int $length;

    public function __construct($length=0)
    {
        $this->length =$length;
    }
    public function getArea(){
        return $this->length *4;
    }

    public function getSides()
    {
        return 4;
    }
}

$r1 = new Rectangle(10,4);
echo "Rectangle area : {$r1->getArea()} and Side : {$r1->getSides()}\n";
$s1 = new Square(5);
echo "Square area : {$s1->getArea()} and Side : {$s1->getSides()}\n";