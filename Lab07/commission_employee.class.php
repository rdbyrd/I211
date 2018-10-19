<?php

/*
 * Author Adam Patrick
 * Date: 10/11/18
 * Name: commission_employee.class.php
 * Description: A parent and child class that models a commision employee
 */

class CommissionEmployee extends Employee {

    private $sales;
    private $commission_rate;
    private static $employee_count;

    //define constructor
    public function __construct($person, $ssn, $sales, $commission_rate) {
        parent::__construct($person, $ssn);
        $this->sales = $sales;
        $this->commission_rate = $commission_rate;
        self::$employee_count;
    }

    //define getters
    public function getSales() {
        return $this->sales;
    }

    public function getCommissionRate() {
        return $this->commission_rate;
    }

    public function getPaymentAmount() {
        $amount = $this->sales * $this->commission_rate;
        return $amount;
    }
    
    // print info
    public function toString() {
        echo"<strong>Commission Employee</strong><br>";
        parent::toString();
        printf("Sales: $%0.2f", $this->getSales());
        echo "<br>";
        printf("Commission Rate: %0.2f", $this->getCommissionRate());
        echo "<br>";
        printf("Payment Amount: $%0.2f", $this->getPaymentAmount());
        
    }

}
