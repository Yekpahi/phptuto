<?php

class BankAccount
{
    private $balance;

    public function getBalance()
    {
        return $this->balance;
    }

    public function deposit($amount)
    {
        if ($amount > 0) {
            $this->balance += $amount;
			echo $this->balance;
        }

        return $this;
    }
}

class SavingAccount extends BankAccount
{
}

$account = new SavingAccount();
$account->deposit(100);
echo $account->getBalance();