<?php

/*
 * Ryan Byrd
 * 11/6/2018
 * book_model.class.php
 * Process SQL commands and execute queries
 */

class BookModel {

//private attributes
    private $db;
    private $dbConnection;
    static private $_instance = NULL;
    private $tblBook;
    private $tblBookCategories;

//singleton pattern, mark constructor private, use getBookModel method to invoke data members
    private function __construct() {
        $this->db = Database::getDatabase();
        $this->dbConnection = $this->db->getConnection();
        $this->tblMovie = $this->db->getBookTable();
        $this->tblMovieRating = $this->db->getBookCategoriesTable();

//Escapes special characters in a string for use in an SQL statement. This stops SQL inject in POST vars. 
        foreach ($_POST as $key => $value) {
            $_POST[$key] = $this->dbConnection->real_escape_string($value);
        }

//Escapes special characters in a string for use in an SQL statement. This stops SQL Injection in GET vars 
        foreach ($_GET as $key => $value) {
            $_GET[$key] = $this->dbConnection->real_escape_string($value);
        }

//initialize movie ratings
        if (!isset($_SESSION['category'])) {
            $ratings = $this->get_book_categories();
            $_SESSION['category'] = $ratings;
        }
    }

//static method to ensure there is just one BookModel instance
    public static function getBookModel() {
        if (self::$_instance == NULL) {
            self::$_instance = new BookModel();
        }
        return self::$_instance;
    }

//select statement to list all books
    public function list_book() {
        $sql = "SELECT * FROM " . $this->tblBook . "," . $this->tblBookCategories .
                " WHERE " . $this->tblBook . ".category=" . $this->tblBookCategories . ".category_id";

//process query
        $query = $this->dbConnection->query($sql);

//error to handle query if it fails
        if (!$query) {
            return false;
        }

//return output if query succeeds with no books
        if ($query->num_rows == 0) {
            return 0;
        }

//object to store all returned books
        $books = array();

        //loop through all book records
        while ($obj = $query->fetch_object()) {
            $book = new Book( 
                    stripslashes($ob->title),
                    stripslashes($ob->isbn),
                    stripslashes($ob->publisher_date),
                    stripslashes($ob->publisher),
                    stripslashes($ob->category),
                    stripslashes($ob->image),
                    stripslashes($ob->description)
                    );
            
            $book->setId($obj->id);
            
            //add books into the array
            $books[] = $book;
        }
        return $books;
    } //end of list_book method

}
