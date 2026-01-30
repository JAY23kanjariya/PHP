<?php

class Average
{
    public float $avg;

    public function calculate(float $one, float $two, float $three):void
    {
        $this->avg =  ($one + $two + $three) / 3;
    }

    public function print():void
    {
        printf("Average : %.2f",$this->avg);
    }
}

$avg = new Average();
echo "Enter First Number : ";
$one = intval(trim(fgets(STDIN)));
echo "\nEnter Second Number : ";
$two = intval(trim(fgets(STDIN)));
echo "\nEnter Third Number : ";
$three = intval(trim(fgets(STDIN)));
$avg->calculate($one, $two, $three);
$avg->print();
