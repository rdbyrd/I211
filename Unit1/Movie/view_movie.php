<?php

/*
 * Ryan Byrd
 * 9/4/2018
 * This file is made to view the movie from the Unit1 Practice
 */

//class definitions
require_once 'classes/view_movie.class.php';
require_once 'classes/movie_manager.class.php';

//get movie id from a query string variable
if (!isset($_GET['id']) || !is_int(intval($_GET['id']))) {
    //handle errors
    $message = "Movie id is invalid.";
    header("Location: show_error.php?eMsg=$message");
    exit();
}

$id = intval($_GET['id']);

//get a specific movie object
$movie_manager = MovieManager::getMovieManager();
$movie = $movie_manager->view_movie($id);

//handle errors if the last query failed
if (!$movie) {
    $message = "There was a proiblem displaying the movie.";
    header("Location: show_error.php?eMsg=$message");
    exit();
}

//display the movie's details
$view = new ViewMovie();
$view->display ($movie);