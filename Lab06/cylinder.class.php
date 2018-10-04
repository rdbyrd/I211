<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of cylinder
 *
 * @author rbyrd
 */
class Cylinder extends Circle {

    private $height;

    public function __construct($height) {
        parent::__construct($radius);
        $this->height = $height;
    }

    public function getHeight() {
        return $this->height;
    }

    public function getBaseArea() {
        //area of a base is a circle
    }

    public function getVolume($baseArea, $height) {

        return $baseArea * $height;
    }

    public function getLateralSurface() {
        return $base * $height;
    }

    public function getSurfaceArea() {
        
    }

    public function toString() {
        
    }

}
