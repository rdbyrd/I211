<?php

/*
 * Ryan Byrd
 * 8/24/2018
 * hourly_worker.class.php
 * I211 lab 1 - class here to create an worker's earnings
 */

class HourlyWorker {

    //initialize private properties for the class.
    private $first_name;
    private $last_name;
    private $wage;
    private $hours;

    //install constructor method.
    public function __construct($first_name, $last_name, $wage, $hours) {

        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->wage = $wage;
        $this->hours = $hours;
    }

    //public function to acquire information about the user
    public function getName() {
        $full_name = $this->first_name . " " . $this->last_name;
        return $full_name;
    }

    //public function to do the math for acquiring earnings.
    public function getWeeklyEarnings() {
        $earnings = $this->wage * $this->hours;
        return $earnings;
    }
}
