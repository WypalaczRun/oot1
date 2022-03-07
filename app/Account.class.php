<?php

class Account
{
    private $name;
    private $balance;
    private $date;

    public function __construct($name)
    {
        $this->date = new DateTime();
        $this->name = $name;
    }

    public function deposit($value)
    {
        $this->balance += $value;
    }

    public function withdrawMoney($value)
    {
        if ($this->balance > 0 and $this->balance >= $value) {
            $this->balance -= $value;
        } else {
            echo "Saldo insuficiente, {$this->getBalanceToString()} <br>";
        }
    }

    public function getBalanceToString(): string
    {
        return "Saldo da conta de {$this->name} é de R$ " . number_format($this->balance, 2, ",", ".") . "<br>";
    }

    public function getDate(): DateTime
    {
        return $this->date;
    }
    /**
     * @return mixed
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * @param mixed $balance
     */
    public function setBalance($balance): void
    {
        $this->balance = $balance;
    }
}