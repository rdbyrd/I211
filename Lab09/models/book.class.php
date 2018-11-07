<?php
/*
 * Author: Louie Zhu
 * Date: March 30, 2016
 * Name: book.class.php
 * Description: the Book class models a real-world book.
 */

class Book {
    
    //private properties of a Book object
    private $id, $title, $isbn, $category, $publish_date, $publisher, $image, $description;
    
    //the constructor that initializes all properties
    public function __construct($title, $isbn, $category, $publish_date, $publisher, $image, $description) {
        $this->title = $title;
        $this->isbn = $isbn;
        $this->category = $category;
        $this->publish_date = $publish_date;
        $this->publisher = $publisher;
        $this->image = $image;
        $this->description = $description;
    }
    
    //get the id of a book
    public function getId() {
        return $this->id;
    }
	
	//get the title of a book
    public function getTitle() {
        return $this->title;
    }

	//get the ISBN of a book
    public function getIsbn() {
        return $this->isbn;
    }
	
	//get the category of a book
    public function getCategory() {
        return $this->category;
    }

	//get the publish date of a book
    public function getPublish_date() {
        return $this->publish_date;
    }

	//get the publisher of a book
    public function getPublisher() {
        return $this->publisher;
    }

	//get the image file name of a book
    public function getImage() {
        return $this->image;
    }

	//get the description of a book
    public function getDescription() {
        return $this->description;
    }

    //set book id
    public function setId($id) {
        $this->id = $id;
    }

}
