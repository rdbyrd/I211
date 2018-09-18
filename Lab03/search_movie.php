<?php

/* 
 * Ryan Byrd
 * 9/12/2018
 * search_movie.php
 * receive data posted into search form
 */

//requires all documents for the lab so all bases are covered
require_once 'classes/movie_manager.class.php';
require_once 'classes/list_movie.class.php';
require_once 'classes/search_movie.class.php';
require_once 'classes/movie_manager.class.php';
require_once 'classes/view_movie.class.php';

//get movie by term from data posted in the search box
if (!isset($_GET['query-terms'])) {
    //handle error and check if data is submitted
}

//input terms from the search box; make use of them.
$terms = $_GET['query-terms'];

$movie_manager = MovieManager:: getMovieManager(); //create a MovieManager
//
//retrieve movies
$movies = $movie_manager->search_movie($terms);

//handle errors if the last query failed
if (!$movies) {
    //handle errors
    $message = "There was a problem displaying movies.";
    header("Location: show_error.php?eMsg=$message");
    exit();
}

// display all results that were searched
$view = new SearchMovie();

//invoke the display method, outputting all movies that match the search
$view->display($terms, $movies);

