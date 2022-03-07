<?php
require_once "Company.php";

final class SalaryAccount extends Company
{
    private $salary;
    private $name;

    public function __construct($name, $company, $salary)
    {
        parent::__construct($name, $company, $salary);
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getSalary(): string
    {
        return "Salario de {$this->name} na empresa {$this->getCompany()} é de R$ " . number_format($this->salary, 2, ",", ".") . "<br>";
    }


    public function withdraw($amount)
    {
        if ($amount > 0) {
            parent::withdrawMoney($amount);
        } else {
            echo "Dinheiro Invalido";
        }
    }


}