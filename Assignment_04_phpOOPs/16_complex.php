<?php

class Complex{
    public int $realPart;
    public int $imaginartPart;

    public function __construct(int $real, int $image)      
    {
        $this->realPart = $real;
        $this->imaginartPart = $image;
    }

    public static function sum(Complex $c1,Complex $c2):Complex{
        return new Complex(
            $c1->realPart + $c2->realPart,
            $c1->imaginartPart + $c2->imaginartPart
        );
    }

    public static function differnece(Complex $c1,Complex $c2):Complex{
        return new Complex(
            $c1->realPart - $c2->realPart,
            $c1->imaginartPart - $c2->imaginartPart
        );
    }

    public static function product(Complex $c1,Complex $c2):Complex{
        return new Complex(
            $c1->realPart * $c2->realPart - $c1->imaginartPart * $c2->imaginartPart,
            $c1->realPart * $c2->imaginartPart + $c1->imaginartPart * $c2->realPart
        );
    }
}

$c1 = new Complex(2,3);
echo " ($c1->realPart + $c1->imaginartPart i)\n";
$c2 = new Complex(1,4);
echo " ($c2->realPart + $c2->imaginartPart i)\n";
$result = Complex::sum($c1,$c2);
echo "Sum ($result->realPart + $result->imaginartPart i)\n";
$result = Complex::differnece($c1,$c2);
echo "Diff ($result->realPart + $result->imaginartPart i)\n";
$result = Complex::product($c1,$c2);
echo "Product ($result->realPart + $result->imaginartPart i)\n";
