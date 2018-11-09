<?php

/*
 * Ryan Byrd
 * 11/8/2018
 * book_controller.class.php
 * this page interacts with all the class files and instantiates them.
 */

class BookController {

    private $book_model;

    //default constructor
    public function __construct() {
        //create an instance of the MovieModel class
        $this->book_model = BookModel::getBookModel();
    }

    //index action that displays all books
    public function index() {
        //retrieve all books and store them in an array
        $books = $this->book_model->list_book();

        if (!$books) {
            //display an error
            $message = "There was a problem displaying books.";
            $this->error($message);
            return;
        }

        // display all books
        $view = new BookIndex();
        $view->display($books);
    }

    //show details of a book
    public function detail($id) {
        //retrieve the specific book
        $book = $this->book_model->view_book($id);

        if (!$book) {
            //display an error
            $message = "There was a problem displaying the book id='" . $id . "'.";
            $this->error($message);
            return;
        }

        //display book details
        $view = new BookDetail();
        $view->display($book);
    }

    //display a book in a form for editing
    public function edit($id) {
        //retrieve the specific book
        $book = $this->book_model->view_book($id);

        if (!$book) {
            //display an error
            $message = "There was a problem displaying the book id='" . $id . "'.";
            $this->error($message);
            return;
        }

        $view = new BookEdit();
        $view->display($book);
    }

    //update a book in the database
    public function update($id) {
        //update the book
        $update = $this->book_model->update_book($id);
        if (!$update) {
            //handle errors
            $message = "There was a problem updating the book id='" . $id . "'.";
            $this->error($message);
            return;
        }

        //display the updateed book details
        $confirm = "The book was successfully updated.";
        $book = $this->book_model->view_book($id);

        $view = new MovieDetail();
        $view->display($book, $confirm);
    }

    //search books
    public function search() {
        //retrieve query terms from search form
        $query_terms = trim($_GET['query-terms']);

        //if search term is empty, list all books
        if ($query_terms == "") {
            $this->index();
        }

        //search the database for matching books
        $books = $this->book_model->search_book($query_terms);

        if ($books === false) {
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
        $books = $this->book_model->search_book($query_terms);

        //retrieve all book titles and store them in an array
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
        $error = new MovieError();

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
