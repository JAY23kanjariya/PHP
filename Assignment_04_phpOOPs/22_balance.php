<?php
class Account
{
    private float $balance;

    public function __construct(float $balance = 0)
    {
        $this->balance = $balance;
    }

    public function deposit(float $amount): void
    {
        if ($amount <= 0) {
            echo "$amount can not be Deposit.\n";
        } else {
            $this->balance += $amount;
            echo "$amount Deposited Successfully... \n";
        }
    }

    public function withdraw(float $amount): void
    {
        if ($this->balance < $amount) {
            echo "$amount not withdraw : Insufficient Balance.\n";
        } else {
            $this->balance += $amount;
            echo "$amount Withdraw Successfully \n";
        }
    }
    public function currentBalance():void {
        echo "Current Balance : $this->balance \n";
    }
}
$custmor = new Account(1000);
$custmor->currentBalance();
$custmor->deposit(0);
$custmor->deposit(100);
$custmor->withdraw(100);
$custmor->withdraw(11100);
$custmor->currentBalance();