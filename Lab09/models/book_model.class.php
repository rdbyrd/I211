<?php

/*
 * Ryan Byrd
 * 11/8/2018
 * book_model.class.php
 * The book model posts all data to view 
 * 
 */

class BookModel {

    //private data members
    private $db;
    private $dbConnection;
    static private $_instance = NULL;
    private $tblBook;
    private $tblBookCategory;

    //To use singleton pattern, this constructor is made private. To get an instance of the class, the getBookModel method must be called.
    private function __construct() {
        $this->db = Database::getDatabase();
        $this->dbConnection = $this->db->getConnection();
        $this->tblBook = $this->db->getBookTable();
        $this->tblBookCategory = $this->db->getBookCategoryTable();

        //Escapes special characters in a string for use in an SQL statement. This stops SQL inject in POST vars. 
        foreach ($_POST as $key => $value) {
            $_POST[$key] = $this->dbConnection->real_escape_string($value);
        }

        //Escapes special characters in a string for use in an SQL statement. This stops SQL Injection in GET vars 
        foreach ($_GET as $key => $value) {
            $_GET[$key] = $this->dbConnection->real_escape_string($value);
        }

        //initialize book ratings
        if (!isset($_SESSION['book_categories'])) {
            $category = $this->get_book_categories();
            $_SESSION['book_categories'] = $category;
        }
    }

    //static method to ensure there is just one BookModel instance
    public static function getBookModel() {
        if (self::$_instance == NULL) {
            self::$_instance = new BookModel();
        }
        return self::$_instance;
    }

    /*
     * the list_book method retrieves all books from the database and
     * returns an array of Book objects if successful or false if failed.
     * Books should also be filtered by ratings and/or sorted by titles or rating if they are available.
     */

    //select statement to list all books
    public function list_book() {
        $sql = "SELECT * FROM " . $this->tblBook . "," . $this->tblBookCategory .
                " WHERE " . $this->tblBook . ".category=" . $this->tblBookCategory . ".category_id";

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
                    stripslashes($obj->title), 
                    stripslashes($obj->isbn), 
                    stripslashes($obj->category), 
                    stripslashes($obj->publish_date), 
                    stripslashes($obj->publisher), 
                    stripslashes($obj->image), 
                    stripslashes($obj->description)
            );

            $book->setId($obj->id);

            //add books into the array
            $books[] = $book;
        }
        return $books;
    }
    
    public function view_book($id) {
        //the select ssql statement
        $sql = "SELECT * FROM " . $this->tblBook . "," . $this->tblBookCategory .
                " WHERE " . $this->tblBook . ".category=" . $this->tblBookCategory . ".category_id" .
                " AND " . $this->tblBook . ".id='$id'";

        //execute the query
        $query = $this->dbConnection->query($sql);

        if ($query && $query->num_rows > 0) {
            $obj = $query->fetch_object();

            //create a book object
            $book = new Book(
                    stripslashes($obj->title), 
                    stripslashes($obj->isbn), 
                    stripslashes($obj->category), 
                    stripslashes($obj->publish_date), 
                    stripslashes($obj->publisher), 
                    stripslashes($obj->image), 
                    stripslashes($obj->description)
            );            
            
            //set the id for the book
            $book->setId($obj->id);

            return $book;
        }

        return false;
    }
//end of list_book method
    //the update_book method updates an existing book in the database. Details of the book are posted in a form. Return true if succeed; false otherwise.
    public function update_book($id) {
        //if the script did not received post data, display an error message and then terminite the script immediately
        if (!filter_has_var(INPUT_POST, 'title') ||
                !filter_has_var(INPUT_POST, 'isbn') ||
                !filter_has_var(INPUT_POST, 'category') ||
                !filter_has_var(INPUT_POST, 'publish_date') ||
                !filter_has_var(INPUT_POST, 'publisher') ||
                !filter_has_var(INPUT_POST, 'image') ||
                !filter_has_var(INPUT_POST, 'description')) {
            return false;
        }

        //retrieve data for the new book; data are sanitized and escaped for security.
        $title = $this->dbConnection->real_escape_string(trim(filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING)));
        $isbn = $this->dbConnection->real_escape_string(trim(filter_input(INPUT_POST, 'isbn', FILTER_SANITIZE_STRING)));
        $category = $this->dbConnection->real_escape_string(trim(filter_input(INPUT_POST, 'category', FILTER_SANITIZE_STRING)));
        $publish_date = $this->dbConnection->real_escape_string(trim(filter_input(INPUT_POST, 'publish_date', FILTER_SANITIZE_STRING)));
        $publisher = $this->dbConnection->real_escape_string(trim(filter_input(INPUT_POST, 'publisher', FILTER_SANITIZE_STRING)));
        $image = $this->dbConnection->real_escape_string(trim(filter_input(INPUT_POST, 'image', FILTER_SANITIZE_STRING)));
        $description = $this->dbConnection->real_escape_string(trim(filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING)));
        

        //query string for update 
        $sql = "UPDATE " . $this->tblBook .
                " SET title='$title', "
                . "isbn='$isbn', "
                . "category='$category', "
                . "publish_date='$publish_date', "
                . "publisher='$publisher', "
                . "image='$image', "
                . "description='$description' "
                . "WHERE id='$id'";

        //execute the query
        return $this->dbConnection->query($sql);
    }

    //search the database for books that match words in titles. Return an array of books if succeed; false otherwise.
    public function search_book($terms) {
        $terms = explode(" ", $terms); //explode multiple terms into an array
        //select statement for AND serach
        $sql = "SELECT * FROM " . $this->tblBook . "," . $this->tblBookCategory .
                " WHERE " . $this->tblBook . ".category=" . $this->tblBookCategory . ".category_id AND (1";

        foreach ($terms as $term) {
            $sql .= " AND title LIKE '%" . $term . "%'";
        }

        $sql .= ")";

        //execute the query
        $query = $this->dbConnection->query($sql);

        // the search failed, return false. 
        if (!$query)
            return false;

        //search succeeded, but no book was found.
        if ($query->num_rows == 0)
            return 0;

        //search succeeded, and found at least 1 book found.
        //create an array to store all the returned books
        $books = array();

        //loop through all rows in the returned recordsets
        while ($obj = $query->fetch_object()) {
            $book = new Book($obj->Title, $obj->Isbn, $obj->Category, $obj->Publish_Date, $obj->Publisher, $obj->image, $obj->description);

            //set the id for the book
            $book->setId($obj->id);

            //add the book into the array
            $books[] = $book;
        }
        return $books;
    }

    //get all book ratings
    private function get_book_categories() {
        $sql = "SELECT * FROM " . $this->tblBookCategory;

        //execute the query
        $query = $this->dbConnection->query($sql);

        if (!$query) {
            return false;
        }

        //loop through all rows
        $ratings = array();
        while ($obj = $query->fetch_object()) {
            $categories[$obj->category] = $obj->category;
        }
        return $categories;
    }

}
