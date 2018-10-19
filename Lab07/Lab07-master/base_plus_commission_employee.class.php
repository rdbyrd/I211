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

    public function __construct($person, $ssn, $sales, $commission_rate, $baseSalary) {
        parent::__construct($person, $ssn, $sales, $commission_rate);
        $this->baseSalary = $baseSalary;
    }
    
    // getters

    public function getBaseSalary() {
        return $this->baseSalary;
    }

    public function getPaymentAmount() {
        return parent::getPaymentAmount() + $this->baseSalary;
    }
    
    // print info
    public function toString() {
        echo "<strong>Base Plus</strong><br>";
        parent::toString();
        printf("<br/> Base salary: $%0.2f", $this->getBaseSalary());
    }

}
