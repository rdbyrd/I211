<?php

/*
 * Ryan Byrd
 * 10/11/2018
 * employee.class.php
 * this file is designed to store basic facts about an employee SSN and number of employees 
 */

//set class to abstract for fleshing out later
abstract class Employee {

    //initialize private attributes
    private $person;
    private $ssn;
    private static $employee_count = 0;
    
    //public constructor for the employee
    public function __construct($person, $ssn) {
        $this->person = $person;
        $this->ssn = $ssn;
        self::$employee_count++;
    }
    
    //getter methods
    public function getPerson() {
        return $this->person;
    }

    public function getSSN() {
        return $this->ssn;
    }

    public static function getEmployee_count() {
        return self::$employee_count;
    }
    
    //person, ssn, employee count
    public function toString () {
     
     echo "Name: ", $this->getPerson();
     echo "<br>SSN: ", $this->getSSN(), "<br>";
     
        
        
    }
}
