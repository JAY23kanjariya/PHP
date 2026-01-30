<?php
class TollBooth
{
    private int $totalNumberOfCars;
    private int $totalTollCollection;

    public function __construct()
    {
        $this->totalNumberOfCars = 0;
        $this->totalTollCollection = 0;
    }

    public function payingCar()
    {
        $this->totalNumberOfCars++;
        $this->totalTollCollection += 50;
    }

    public function noPayingCar()
    {
        $this->totalNumberOfCars++;
    }

    public function show()
    {
        echo "Today Data : \n";
        echo "Total Number of Cars : $this->totalNumberOfCars \n";
        echo "Total Toll Collection : $this->totalTollCollection \n";
    }
}

function Main()
{
    $tollCars = new TollBooth();
    while (true) {
        echo "===== Toll Menu =====\n";
        echo "1. Toll Paying Car. \n";
        echo "2. No Toll Paying Car. \n";
        echo "3. Display Data. \n";
        echo "4. Exit \n";
        echo "==================== \n";
        $input = intval(trim(fgets(STDIN)));
        switch ($input) {
            case 1:
                $tollCars->payingCar();
                echo " Toll Done \n";
                break;
            case 2:
                $tollCars->noPayingCar();
                echo " No Toll \n";
                break;
            case 3:
                $tollCars->show();
                break;
            case 4:
                echo "Exiting...\n";
                exit;
            default:
                echo "Invalid Input!!!!\n";
        }
    }
}

Main();
