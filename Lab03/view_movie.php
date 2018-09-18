<?php

/*
 * Author: Louie Zhu
 * Date: Jan 22, 2017
 * File: view_movie.php
 * Description: view details of the selected movie
 * 
 */
//get movie id from a query string variable
if (!isset($_GET['id']) || !is_int(intval($_GET['id']))) {
    //handle error
}
$id = intval($_GET['id']);

//view movie details
require_once 'classes/movie_manager.class.php';
require_once 'classes/view_movie.class.php';


//get the movie
$movie_manager = MovieManager::getMovieManager();
$movie = $movie_manager->view_movie($id);

if (!$movie) {
    //handle errors
    $message = "An error has occurred.";
    header("Location: show_error.php?eMsg=$message");
}

//display all movies
$view = new ViewMovie();
$view->display($movie);
