<?php
class Car
{
    private $name;
    private $direction;
    private $position;

    public function __construct($name, $direction = 'N', $position = 0)
    {
        $this->name = $name;
        $this->direction = $direction;
        $this->position = $position;
    }

    public function turn($newDirection = null)
    {
        $directions = ['N', 'E', 'S', 'W'];
        // turn to right side
        if ($newDirection === null) {
            $index = array_search($this->direction, $directions);
            $index = ($index + 1) % count($directions);
            $this->direction = $directions[$index];
        } else {
            if (in_array(strtoupper($newDirection), $directions)) {
                $this->direction = $newDirection;
            }
        }
        echo "Current Direction of car : $this->direction \n";
    }

    public function move($distance)
    {
        $this->position += $distance;
    }

    public function show()
    {
        echo "<b>Car Current Details<b>\n";
        echo "Car Name : $this->name \n";
        echo "Direction of Car : $this->direction \n";
        echo "Position of Car : $this->position KM\n";
    }
}

function Main()
{
    $car1 = new Car("Volvo", "W", 0);
    while (true) {
        echo "========== Car Menu =========\n";
        echo "1. Turn Car in right Side by 90 degree.\n";
        echo "2. Turn Car in any Direction. \n";
        echo "3. Travel a Car for particular distance.\n";
        echo "4. Show Current Details about Car.\n";
        echo "5. Exit \n";
        echo "=============================\n";
        $input = intval(trim(fgets(STDIN)));
        switch ($input) {
            case 1:
                $car1->turn();
                break;
            case 2:
                echo "Enter Direction (E, W, N, S) : ";
                $direction = strtoupper(trim(fgets(STDIN)));
                $car1->turn($direction);
                break;
            case 3:
                echo "Enter Distance : ";
                $distance = intval(trim(fgets(STDIN)));
                $car1->move($distance);
                break;
            case 4:
                $car1->show();
                break;
            case 5:
                echo "Thank you existing...";
                exit;
            default:
                echo "Invalid Input \n";
        }
    }
}
Main();
