<?php

/*
 * Ryan Byrd
 * 11/6/2018
 * book_controller.class.php
 * This class instantiates objects from the model and view classes, then sends to index for the user to view
 */


class BookController {

    private $book_model;

    //default constructor
    public function __construct() {
        //create an instance of the MovieModel class
        $this->book_model = BookModel::getBookModel();
    }

    //index action that displays all movies
    public function index() {
        //retrieve all movies and store them in an array
        $books = $this->book_model->list_book();

        if (!$books) {
            //display an error
            $message = "There was a problem displaying books.";
            $this->error($message);
            return;
        }

        // display all movies
        $view = new BookIndex();
        $view->display($books);
    }

    //show details of a movie
    public function detail($id) {
        //retrieve the specific book
        $book = $this->book_model->view_book($id);

        if (!$book) {
            //display an error
            $message = "There was a problem displaying the book id='" . $id . "'.";
            $this->error($message);
            return;
        }

        //display movie details
        $view = new BookDetail();
        $view->display($book);
    }

    //search movies
    public function search() {
        //retrieve query terms from search form
        $query_terms = trim($_GET['query-terms']);

        //if search term is empty, list all movies
        if ($query_terms == "") {
            $this->index();
        }

        //search the database for matching movies
        $books = $this->book_model->search_book($query_terms);

        if ($movies === false) {
            //handle error
            $message = "An error has occurred.";
            $this->error($message);
            return;
        }
        
        //display matched books
        $search = new BookSearch();
        $search->display($query_terms, $books);
    }

    //autosuggestion
    public function suggest($terms) {
        //retrieve query terms
        $query_terms = urldecode(trim($terms));
        $movies = $this->book_model->search_book($query_terms);

        //retrieve all movie titles and store them in an array
        $titles = array();
        if ($books) {
            foreach ($books as $book) {
                $titles[] = $book->getTitle();
            }
        }

        echo json_encode($titles);
    }

    //handle an error
    public function error($message) {
        //create an object of the Error class
        $error = new BookError();

        //display the error page
        $error->display($message);
    }

    //handle calling inaccessible methods
    public function __call($name, $arguments) {
        //$message = "Route does not exist.";
        // Note: value of $name is case sensitive.
        $message = "Calling method '$name' caused errors. Route does not exist.";

        $this->error($message);
        return;
    }
    
}
