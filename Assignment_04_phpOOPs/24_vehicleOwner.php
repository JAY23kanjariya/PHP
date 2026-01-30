<?php
class Owner
{
    private string $ownerName;
    private string $cnic;
    private string $phone;

    public function __construct($ownerName, $cnic, $phone)
    {
        $this->ownerName = $ownerName;
        $this->cnic = $cnic;
        $this->phone = $phone;
    }

    // Getters & Setters
    public function getOwnerName()
    {
        return $this->ownerName;
    }

    public function setOwnerName($name)
    {
        $this->ownerName = $name;
    }

    public function getCnic()
    {
        return $this->cnic;
    }

    public function setCnic($cnic)
    {
        $this->cnic = $cnic;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
}
class Vehicle
{
    private string $vehicleName;
    private int $engineCC;
    private string $model;

    // non-static nested class
    private Owner $owner;

    // static nested class 
    public static ?Owner $staticOwner = null;

    public function __construct($vehicleName, $engineCC, $model, Owner $owner)
    {
        $this->vehicleName = $vehicleName;
        $this->engineCC = $engineCC;
        $this->model = $model;
        $this->owner = $owner;
    }
    // Getters & Setters for vehicleName
    public function getVehicleName()
    {
        return $this->vehicleName;
    }

    public function setVehicleName($vehicleName)
    {
        $this->vehicleName = $vehicleName;
    }

    // Getters & Setters for engineCC
    public function getEngineCC()
    {
        return $this->engineCC;
    }

    public function setEngineCC($engineCC)
    {
        $this->engineCC = $engineCC;
    }

    // Getters & Setters for model
    public function getModel()
    {
        return $this->model;
    }

    public function setModel($model)
    {
        $this->model = $model;
    }

    // Getters & Setters for owner
    public function getOwner()
    {
        return $this->owner;
    }

    public function setOwner(Owner $owner)
    {
        $this->owner = $owner;
    }

    // method ovrridden
    public function showInfo()
    {
        echo "Vehicle: {$this->vehicleName}, Engine: {$this->engineCC}cc, Model: {$this->model}\n";
    }

    // Method that accepts anonymous inner class
    public function execute(Vehicle $vehicle)
    {
        $vehicle->showInfo();
    }
}

// Non-static inner class usage
$owner1 = new Owner("nitin", "35201", "03011");

$vehicle = new Vehicle("Volvo", 1800, "2023", $owner1);

// Static nested class usage
// Vehicle::$staticOwner = new Owner("Ahmed", "35201-9999999-9", "0302-2222222");

