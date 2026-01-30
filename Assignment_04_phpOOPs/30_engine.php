<?php

interface Engine{
    public function changeGear(int $gear);
    public function speedUp(int $speed);
}

class Vehicles implements Engine{
    public function changeGear(int $gear){
        echo " Current Gear : $gear";
    }
    public function speedUp(int $speed){
        echo " Current Speed : $speed";
    }
}
$car = new Vehicles();
$car->changeGear(4);
$car->speedUp(122);