<?php

require_once "Account.class.php";

final class SavingAccount extends Account
{
    private $interestRate = 0.01;
    private $monthDeposits = 0;
    private $monthWithdrawals = 0;

    public function __construct(string $name)
    {
        parent::__construct($name);
    }

    final public function withdrawMoney($value)
    {
        if ($this->monthWithdrawals < 4) {
            if ($this->getBalance() > 0 and $this->getBalance() >= $value) {
                $this->monthWithdrawals++;
                parent::withdrawMoney($value);
            } else {
                echo "Saldo insuficiente, {$this->getBalanceToString()} <br>";
            }
        } else {
            echo "Limite de retiradas excedido, {$this->getBalanceToString()} <br>";
        }

    }

    final public function depositMoney($value)
    {
        if($value > 0) {
            if ($this->monthDeposits < 4) {
                $this->monthDeposits++;
                parent::deposit($value);
            } else {
                echo "Limite de depositos excedido, {$this->getBalanceToString()} <br>";
            }
        } else {
            echo "Valor de deposito invalido, {$this->getBalanceToString()} <br>";
        }
    }

    public function calculateInterest(): void
    {
        if ($this->monthDeposits > 0 or $this->monthWithdrawals > 0) {
            $dateNow = new DateTime();
            $dateNow->add(new DateInterval('P1M'));
            if ($dateNow->format('d') == $this->getDate()->format('d')) {
                $this->setBalance($this->getBalance() + ($this->getBalance() * $this->interestRate));
                $this->monthDeposits = 0;
                $this->monthWithdrawals = 0;
            }
        }
    }

    public function getInterestRate(): float
    {
        return $this->interestRate;
    }



}