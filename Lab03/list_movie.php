<?php

/*
 * Author: Louie Zhu
 * Date: Jan 22, 2017
 * File: list_movie.php
 * Description: list all movies
 * 
 */
require_once 'classes/movie_manager.class.php';
require_once 'classes/list_movie.class.php';

$movie_manager = MovieManager:: getMovieManager(); //create a MovieManager
//
//retrieve movies
$movies = $movie_manager->list_movie();

//handle errors if the last query failed
if (!$movies) {
    //handle errors
    $message = "There was a problem displaying movies.";
    header("Location: show_error.php?eMsg=$message");
    exit();
}

// display all movies
$view = new ListMovie();
$view->display($movies);
