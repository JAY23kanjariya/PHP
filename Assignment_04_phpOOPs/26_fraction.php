<?php

class Fraction
{
    private int $numerator;
    private int $denominator;

    // Default constructor
    public function __construct($numerator = 0, $denominator = 1)
    {
        $this->numerator = $numerator;
        $this->denominator = $denominator;
    }

    // Setters
    public function setNumerator($numerator)
    {
        $this->numerator = $numerator;
    }

    public function setDenominator($denominator)
    {
        if ($denominator == 0) {
            echo "Denominator cannot be zero\n";
            return;
        }
        $this->denominator = $denominator;
    }

    // Getters
    public function getNumerator()
    {
        return $this->numerator;
    }

    public function getDenominator()
    {
        return $this->denominator;
    }

    // Display function
    public function display()
    {
        echo $this->numerator . "/" . $this->denominator . "\n";
    }

    // Equals method
    public function equals(Fraction $otherFraction): bool
    {
        return ($this->numerator == $otherFraction->getNumerator()) &&
            ($this->denominator == $otherFraction->getDenominator());
    }
}

$f1 = new Fraction(10,2);
$f2 = new Fraction(121,4);
$f1->display();
$f2->display();
$f1->equals($f2);
