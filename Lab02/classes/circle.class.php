<?php

/*
 * Ryan Byrd
 * 9/4/2018
 * Define the Circle class
 */

class Circle {

    //declare properties
    private $radius;
    private $center;

    //establish constructor method
    public function __construct($radius, $center) {
        $this->radius = $radius;
        $this->center = $center;
    }

    //methods for finding Point coordinates, radius, area, and circumference.
    public function getCenter() {
        return $this->center;
    }
    
    public function getRadius() {
        $radius = number_format($this->radius, 1);
        return $radius;
    }

    public function getArea() {
        $area = number_format(3.14 * pow($this->radius, 2), 2);
        return $area;
    }

    public function getCircumference() {
        $circumference = number_format(2 * 3.14 * $this->radius, 2);
        return $circumference;
    }

    //output all user inputted data and perform methods.
    public function toString() {

        return "Center: [" . $this->getCenter()->getxCoord() . ", " . $this->getCenter()->getyCoord() . "] <br/> " .
            "Radius: " . $this->getRadius() . "<br/>" .
            "Area: " . $this->getArea() . "<br/>" .
            "Circumference: " . $this->getCircumference() . "<br/>";
    }
    
}
