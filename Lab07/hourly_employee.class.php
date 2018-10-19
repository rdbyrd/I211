<?php

/*
 * Ryan Byrd
 * 10/11/2018
 * hourly_employee.class.php
 * this file is designed for handling employee wages and hours
 */

//create hourly employee class, child of employee
class HourlyEmployee extends Employee implements Payable {
    
    //private attributes for the hourly employee page
    private $wage;
    private $hours;
    
    public function __construct($wage, $hours) {
        
        parent::__construct($person, $ssn);
        
        $this->wage = $wage;
        $this->hours = $hours;
    }

    //get wage
    public function getWage() {
        return $this->wage;
    }

    //get hours
    public function getHours() {
        return $this->hours;
    }

    //get payment amount
    public function getPaymentAmount() {
        return $this->getPaymentAmount();
    }
    
    //toString
    public function toString() {
        parent::toString();
        echo "<br>Wage per hour: $", $this->getWage();
        echo "<br>Hours: ", $this->getHours();
        echo "<br>Earning: $", $this->getPaymentAmount();
    }
    

}
