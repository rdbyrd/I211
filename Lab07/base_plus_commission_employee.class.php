<?php

/*
 * Ryan Byrd
 * 10/11/2018
 * base_plus_commission_employee.class.php
 * this file is designed to store base salary and commission amount
 */

//child class of ComissionEmployee
class basePlusCommissionEmployee extends CommissionEmployee {

    //private attribute
    private $baseSalary;

    public function __construct($baseSalary) {
        parent::__construct($person, $ssn, $sales, $commission_rate);
        $this->baseSalary = $baseSalary;
    }

    public function getBaseSalary() {
        return $this->baseSalary;
    }

    public function getPaymentAmount() {
        parent::getPaymentAmount();
    }

    public function toString() {
        echo "<br/> Base salary: ", $this->getBaseSalary;
        echo "<br/> Base salary: ", $this->getBaseSalary;
        echo "<br/> Base salary: ", $this->getBaseSalary;
        echo "<br/> Base salary: ", $this->getPaymentAmount;
    }

}
