<?php
class StaticKeyword
{
    private static int $generateSerialNumber = 0;
    private int $serialNumber;

    public function __construct()
    {
        $this->serialNumber = ++self::$generateSerialNumber;
    }

    public function report()
    {
        echo "I am Object number $this->serialNumber \n";
    }
}

function Main(){
    $obj1 = new StaticKeyword();
    $obj1  ->report();
    $obj2 = new StaticKeyword();
    $obj2  ->report();
    $obj3 = new StaticKeyword();
    $obj3  ->report();
}
Main();