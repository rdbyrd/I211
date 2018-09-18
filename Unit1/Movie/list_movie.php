<?php

require_once 'classes/list_movie.class.php';
require_once 'classes/movie_manager.class.php';

//createa a movie manager object
$movie_manager = MovieManager::getMovieManager();

//get all movies
$movies = $movie_manager->list_movie();

//error hnadling if last query failed
if(!$movies) {
    $message = "There was a problem displaying movies.";
    header("Location: show_error.php?eMsg=$message");
}

//display all movies
$view = new ListMovie();
$view->display($movies);