<?php

/*
 * Author: Adam Patrick
 * Date: 10/9/18
 * Name: person.class.php
 * Description: This class models a person, composition of employee
 */

class Person {

    private $first_name;
    private $last_name;

    //define constructor
    public function __construct($first_name, $last_name) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }

    //define getters
    public function getFirstName() {
        return $this->first_name;
    }

    public function getLastName() {
        return $this->last_name;
    }

    //turn the class into a string and output it
    public function toString() {
        echo "First Name: ", $this->getFirstName();
        echo "Last Name: ", $this->getLastName();
    }

}
