<?php

/*
 * Ryan Byrd
 * 9/4/2018
 * Define the Point class
 */

class Point {

    //initialize private attributes for the class
    private $xCoord;
    private $yCoord;
    
    //initialize the constructur method
    public function __construct($xCoord, $yCoord) {
        
        $this->xCoord = $xCoord;
        $this->yCoord = $yCoord;
    }
    
    //method to get the X coordinate
    public function getxCoord () {
        return $this->xCoord;
    }

    //method to get the Y coordinate
    public function getyCoord () {
        return $this->yCoord;
    }
    
}
