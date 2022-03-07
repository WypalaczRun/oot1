<?php
require_once "app/SavingAccount.class.php";
require_once "app/SalaryAccount.class.php";

$contaFelipe = new SavingAccount("Felipe");
$contaFelipe->depositMoney(50000);
$contaFelipe->calculateInterest();
echo $contaFelipe->getBalanceToString();

$contaFelipe->withdrawMoney(5000);
$contaFelipe->withdrawMoney(5000);
$contaFelipe->withdrawMoney(5000);
$contaFelipe->withdrawMoney(5000);
$contaFelipe->withdrawMoney(5000);
echo $contaFelipe->getBalanceToString();

$contaSalario = new SalaryAccount("Lucas", "Appmax", 1500);
echo $contaSalario->getSalary();
