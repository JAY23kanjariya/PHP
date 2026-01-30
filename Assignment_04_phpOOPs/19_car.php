<?php
class Car
{
    public String $carModel;
    public String $carName;
    public float $carPrice;
    public String $carOwner;

    public function __construct()
    {
        $this->carModel = "Not defined";
        $this->carName = "Not defined";
        $this->carPrice = 0.0;
        $this->carOwner = "Not defined";
    }

    public function assignValue(String $model, String $name, float $price, String $owner): void
    {
        $this->carModel = $model;
        $this->carName = $name;
        $this->carPrice = $price;
        $this->carOwner = $owner;
    }

    public function display()
    {
        echo " ===== Car Details ===== \n";
        echo "Car Model: " . $this->carModel . "\n";
        echo "Car Name: " . $this->carName . "\n";
        echo "Car Price: " . $this->carPrice . "\n";
        echo "Car Owner: " . $this->carOwner . "\n";
    }
}
class Runner
{
    public static function Main()
    {
        $runner = new Runner();
        $car1 = new Car();
        $car2 = new Car();
        $car3 = new Car();

        $runner->createCar($car1);
        $runner->createCar($car2);
        $runner->createCar($car3);

        $runner->displayCar($car1);
        $runner->displayCar($car2);
        $runner->displayCar($car3);
    }
    public function displayCar(Car $car)
    {
        $car->display();
        $car->display();
        $car->display();
    }
    public function createCar(Car $car)
    {
        echo "Enter car Model : ";
        $model = trim(fgets(STDIN));
        echo "\nEnter car name: ";
        $name = trim(fgets(STDIN));
        echo "\nEnter car price: ";
        $price = (float)trim(fgets(STDIN));
        echo "\nEnter car owner: ";
        $owner = trim(fgets(STDIN));
        $car->assignValue($model, $name, $price, $owner);
    }
}
Runner::Main();
