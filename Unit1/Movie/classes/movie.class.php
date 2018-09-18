<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of movie
 *
 * @author ryand
 */
class Movie {
    //private movie attribute
    private $id, $title, $rating, $release_date, $director, $image, $description;
    
    //initialize constructor public function
    public function __construct($title, $rating, $release_date, $director, $image, $description) {
        
        $this->title = $title;
        $this->rating = $rating;
        $this->release_date = $release_date;
        $this->director = $director;
        $this->image = $image;
        $this->description = $description;   
    }
    
    //get methods
    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getRating() {
        return $this->rating;
    }

    public function getRelease_date() {
        return $this->release_date;
    }

    public function getDirector() {
        return $this->director;
    }

    public function getImage() {
        return $this->image;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setId($id) {
        $this->id = $id;
    }
}

