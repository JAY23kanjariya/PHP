<?php
echo "Create a class called employee that contains two members: an employee 
number (type int) and the employee’s compensation (in rupees : type 
float). Member functions should allow the user to enter this data and 
display it<hr>";

class Employee
{
    private int $employeeNumber;
    private float $compensation;

    public function setEmployee($empID, $salary)
    {
        $this->employeeNumber = $empID;
        $this->compensation = $salary;
    }

    public function display()
    {
        echo "<b>Employee Details </b><br>";
        echo "Employee Number : " . $this->employeeNumber . "<br>";
        echo "Employee Compensation : " . $this->compensation . "<br>";
    }
}

$emp1 = new Employee();
$emp1->setEmployee(1018,5000.0);
$emp1->display();
