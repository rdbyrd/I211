<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of circle
 *
 * @author rbyrd
 */
class Circle {
    
    //set attribute
    private $radius;
    
    //set constructor method to one parameter
    function __construct($radius) {
        $this->radius = $radius;
    }
    
//    getter method for radius
    function getRadius() {
        return $this->radius;
    }

    //class method for calculating area of a circle
    function getArea($radius) {
        return $radius*radius*pi();
    }

    //class method for calculating circumference of a circle
    function getCircumference($radius) {
        return 2*$radius*pi();
    }

}