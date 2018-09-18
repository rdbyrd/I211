<?php

class Rectangle {

//   attributes
    private $width;
    private $height;
    
    //constructor
    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }
    
    //get width of rectangle
    public function get_width() {
        return $this->width;
    }
    
    //get height of rectangle
    public function get_height() {
        return $this -> height;
    }
    
    //set a rectangle's width
    public function set_width($width) {
        return $this -> width = $width;
    }

    //set a rectangle's height
    public function set_height($height) {
        return $this -> height = $height;
    }
    
    //calculate the area of the rectangle
    public function calculate_area () {
        $area = $this -> width * $this->height;
        return $area;
    }
    
    //calculate the perimeter of the rectangle
    public function calculate_perimeter () {
        $perimeter = $this->width * 2 + $this -> height*2;
        return $perimeter;
    }
}
