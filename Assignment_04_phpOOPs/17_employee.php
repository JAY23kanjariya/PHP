<?php

class Employee
{
    private int $salary;
    private int $workHour;

    public function __construct()
    {
        $this->salary = 0;
        $this->workHour = 0;
    }

    public function getInfo(int $salary, int $hour): void
    {
        $this->salary = $salary;
        $this->workHour = $hour;
    }

    public function addSalary(): void
    {
        if ($this->salary < 500) {
            $this->salary += 10;
        }
    }

    public function addWork(): void
    {
        if ($this->workHour > 6) {
            $this->salary += 5;
        }
    }

    public function print():void{
        echo "Final Salary : $this->salary \n";
    }
}

$emp1 = new Employee();
$emp1->getInfo(500,8);
$emp1->addWork();
$emp1->addSalary();
$emp1->print();