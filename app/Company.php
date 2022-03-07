<?php

class Company extends Account
{
    private $name;
    private $company;

    public function __construct($name, $company, $numMoney)
    {
        $this->name = $name;
        $this->company = $company;
        parent::__construct($name, $numMoney);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCompany() : string
    {
        return $this->company;
    }
}