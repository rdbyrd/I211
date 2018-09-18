<?php

class Car {

    //attributes
    private $make;
    private $model;
    private $year;
    private $color;

    //constructor method
    public function __construct($make, $model, $year, $color) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
        $this->color = $color;
    }

    public function get_make() {
        return $this->make;
    }

    public function get_model() {
        return $this->model;
    }
    
        public function get_year() {
        return $this->year;
    }

        public function get_color() {
        return $this->color;
    }
}
