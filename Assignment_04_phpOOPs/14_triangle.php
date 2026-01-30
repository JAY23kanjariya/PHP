<?php

class Triangles
{
    private int $side1 = 3;
    private int $side2 = 4;
    private int $side3 = 5;

    public function perimater(): float
    {
        return (($this->side1 + $this->side2 + $this->side3));
    }

    public function area(): float
    {
        $s = $this->perimater()/2;
        return sqrt(($s * ($s - $this->side1) * ($s - $this->side2) * ($s - $this->side3)));
    }
}

$triangle = new Triangles();
printf("Perimeter : %.2f \n",$triangle->perimater());
printf("Area : %.2f",$triangle->area());
