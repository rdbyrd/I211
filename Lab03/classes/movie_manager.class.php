<?php

/*
 * Author: Louie Zhu
 * Date: Jan 22, 2017
 * File: movie_manager.class.php
 * Description: this script defines methods that operate on movie objects.
 * 
 */
require_once('application/database.class.php');
require_once('movie.class.php');

class MovieManager {

//private data members
    private $db, $dbConnection;
    private $tblMovie, $tblMovieRating;
    static private $_instance = NULL;

//the constructor. It initializes private data members.
    private function __construct() {
        $this->db = Database::getDatabase();
        $this->dbConnection = $this->db->getConnection();
        $this->tblMovie = $this->db->getMovieTable();
        $this->tblMovieRating = $this->db->getMovieRatingTable();

//Escapes special characters in a string for use in an SQL statement. This stops SQL inject in POST vars. 
        foreach ($_POST as $key => $value) {
            $_POST[$key] = $this->dbConnection->real_escape_string($value);
        }

//Escapes special characters in a string for use in an SQL statement. This stops SQL Injection in GET vars 
        foreach ($_GET as $key => $value) {
            $_GET[$key] = $this->dbConnection->real_escape_string($value);
        }
    }

//static method to ensure there is just one MovieManager instance
    public static function getMovieManager() {
        if (self::$_instance == NULL) {
            self::$_instance = new MovieManager();
        }
        return self::$_instance;
    }

    /*
     * the listMovie method retrieves all movies from the database and
     * returns an array of Movie objects if successful or false if failed.
     */

    public function list_movie() {
        /* construct the sql SELECT statement in this format
         * SELECT ...
         * FROM ...
         * WHERE ...
         */
        $sql = "SELECT * FROM " . $this->tblMovie . "," . $this->tblMovieRating .
                " WHERE " . $this->tblMovie . ".rating=" . $this->tblMovieRating . ".rating_id";

//execute the query
        $query = $this->dbConnection->query($sql);

// if the query failed, return false. 
        if (!$query)
            return false;

//if the query succeeded, but no movie was found.
        if ($query->num_rows == 0)
            return 0;

//handle the result
//create an array to store all returned movies
        $movies = array();

//loop through all rows in the returned recordsets
        while ($obj = $query->fetch_object()) {
            $movie = new Movie(stripslashes($obj->title), stripslashes($obj->rating), stripslashes($obj->release_date), stripslashes($obj->director), stripslashes($obj->image), stripslashes($obj->description));

//set the id for the movie
            $movie->setId($obj->id);

//add the movie into the array
            $movies[] = $movie;
        }
        return $movies;
    }

//display details of a movie
    public function view_movie($id) {
//the select ssql statement
        $sql = "SELECT * FROM " . $this->tblMovie . "," . $this->tblMovieRating .
                " WHERE " . $this->tblMovie . ".rating=" . $this->tblMovieRating . ".rating_id" .
                " AND " . $this->tblMovie . ".id='$id'";

//execute the query
        $query = $this->dbConnection->query($sql);

        if ($query && $query->num_rows > 0) {
            $obj = $query->fetch_object();

//create a movie object. Slashes in strings are stripped first by calling the stripslashes function.
            $movie = new Movie(stripslashes($obj->title), stripslashes($obj->rating), stripslashes($obj->release_date), stripslashes($obj->director), stripslashes($obj->image), stripslashes($obj->description));

//set the id for the movie
            $movie->setId($obj->id);

            return $movie;
        }

        return false;
    }

//search the database for movies that match words in titles. Return an array of movies if succeed; false otherwise.
    public function search_movie($terms) {
        
        $terms = explode(" ", $terms); //explode multiple terms into an array

//select statement for an AND serach
        $sql = "SELECT * FROM " . $this->tblMovie . "," . $this->tblMovieRating .
                " WHERE " . $this->tblMovie . ".rating=" . $this->tblMovieRating . ".rating_id AND (1";

        foreach ($terms as $term) {
            $sql .= " AND title LIKE '%" . $term . "%'";
        }
        $sql .= ")";

//execute the query
        $query = $this->dbConnection->query($sql);

// if the query failed, return false. 
        if (!$query)
            return false;

//if the query succeeded, but no movie was found.
        if ($query->num_rows == 0)
            return 0;

//handle the result
//create an array to store all returned movies
        $movies = array();

//loop through all rows in the returned recordsets
        while ($obj = $query->fetch_object()) {
            $movie = new Movie(stripslashes($obj->title), stripslashes($obj->rating), stripslashes($obj->release_date),
            stripslashes($obj->director), stripslashes($obj->image), stripslashes($obj->description));

//set the id for the movie
            $movie->setId($obj->id);

//add the movie into the array
            $movies[] = $movie;
        }
        return $movies;
    }

//get all movie ratings
private function get_movie_ratings() {
$sql = "SELECT * FROM " . $this->tblMovieRating;

//execute the query
$query = $this->dbConnection->query($sql);

if (!$query) {
return false;
}

//loop through all rows
$ratings = array();
while ($obj = $query->fetch_object()) {
$ratings[$obj->rating] = $obj->rating_id;
}
return $ratings;
}

}
