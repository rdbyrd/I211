<?php

/*
 * Ryan Byrd
 * 10/04/2018
 * cylinder.php
 * define a class for the Cylinder 
 */

class Cylinder extends Circle {

    //initialize private property
    private $height;

    //constructor method
    public function __construct($radius, $height) {
        
        //bring circle.class.php into this
        parent::__construct($radius);
        $this->height = $height;
    }

    //getters
    public function getHeight() {
        return $this->height;
    }

    public function getBaseArea() {
        //area of a circle 
        return parent::getRadius() * parent::getRadius() * pi();
    }

    public function getVolume() {
        //find volume
        return $this->getBaseArea() * $this->getHeight();
    }

    public function getLateralSurface() {
        //length of the side formula
        return parent::getCircumference() * $this->getHeight();
    }

    public function getSurfaceArea() {
        //surface area
        return $this->getLateralSurface() + 2 * $this->getBaseArea();
    }

    public function toString() {
        //json encode that will make every number have up to two decimal points for output
        //formed as an array to manage methods
        echo json_encode(array 
           ("radius" => parent::getRadius(),
            "height" => $this->getHeight(),
            "base" => number_format($this->getBaseArea(), 2),
            "volume" => number_format($this->getVolume(), 2),
            "lateral" => number_format($this->getLateralSurface(), 2),
            "surface" => number_format($this->getSurfaceArea(), 2)
            ));
    }

}
