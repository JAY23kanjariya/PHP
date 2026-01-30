<?php
    class Animal{
        //properities
        public $legs;

        // constructor
        public function __construct($legs){
            $this->legs = $legs;
            echo "constructor called.<br>";
        }

        //method
        public function eat(){
            echo "eat function called...";
        }
    }

    // instance object of Animal class
    $dog = new Animal(4);
    
    echo "legs : ".$dog->legs."<br>";
    echo $dog->eat()."<br>";
?>