<?php

/*
 * Ryan Byrd
 * 10/04/2018
 * circle.class.php
 * define the circle class
 */

class Circle {
    
    //set attribute
    private $radius;
    
    //set constructor method to one parameter
    public function __construct($radius) {
        $this->radius = $radius;
    }
    
//    getter method for radius
    public function getRadius() {
        return $this->radius;
    }

    //class method for calculating area of a circle
    public function getArea() {
        return $this->getRadius()* $this->getRadius()*pi();
    }

    //class method for calculating circumference of a circle
    public function getCircumference() {
        return 2*$this->getRadius()*pi();
    }

}