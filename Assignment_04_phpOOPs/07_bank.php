<?php

class BankAccount
{
    private $accountHolderName;
    private $accountNumber;
    private $accountType;
    private $balance;
    private static $accNumberGenerator = 2026000;

    public function __construct()
    {
        $this->accountHolderName = 'Guest';
        $this->accountNumber = self::$accNumberGenerator++;
        $this->accountType = 'saving';
        $this->balance = 0.00;
    }

    public function createAccount($name, $type, $initialBalance)
    {
        $this->accountHolderName = $name;
        $this->accountType = $type;
        $this->balance = $initialBalance;
        echo "Your Account Number : $this->accountNumber \n";
    }

    public function deposit($amount)
    {
        $this->balance += $amount;
        echo "Deposited: $amount\n";
    }

    public function withdraw($amount)
    {
        if ($amount > $this->balance) {
            echo "Insufficient balance!\n";
        } else {
            $this->balance -= $amount;
            echo "Withdrawn: $amount\n";
        }
    }

    public function display()
    {
        echo "Account Holder: $this->accountHolderName\n";
        echo "Account Number: $this->accountNumber\n";
        echo "Account Type: $this->accountType\n";
        echo "Balance: $this->balance\n";
    }
}

// Main function
function Main()
{
    $custmor = new BankAccount();
    while (true) {
        echo "======== BANK ============\n";
        echo "1. Create Account\n";
        echo "2. Deposit \n";
        echo "3. Withdraw \n";
        echo "4. Account Details \n";
        echo "5. Exit\n";
        echo "==========================\n";
        $input = intval(trim(fgets(STDIN)));
        switch ($input) {
            case 1:
                echo "Enter Name : ";
                $name = trim(fgets(STDIN));
                echo "\n Account type : ";
                $type = trim(fgets(STDIN));
                echo "\n Deposit : ";
                $balance = intval(trim(fgets(STDIN)));
                $custmor->createAccount($name, $type, $balance);
                break;
            case 2:
                echo "Enter amount to deposit: ";
                $amount = intval(trim(fgets(STDIN)));
                $custmor->deposit($amount);
                break;
            case 3:
                echo "Enter amount to withdraw: ";
                $amount = intval(trim(fgets(STDIN)));
                $custmor->withdraw($amount);
                break;
            case 4:
                $custmor->display();
                break;
            case 5:
                echo "Thank you for using our bank!\n";
                exit;
            default:
                echo "Invalid !!!";
        }
    }
}
Main();
