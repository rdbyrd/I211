<?php
/*
 * Author: Ryan Byrd
 * Date: 11/6/2018
 * Name: book_index.class.php
 * Description: This class defines a display for all books.
 */
class BookIndex extends BookIndexView {
    /*
     * the display method accepts an array of book objects and displays
     * them in a grid.
     */

    public function display($books) {
        //display page header
        parent::displayHeader("List All Book");

        ?>
        <div id="main-header">Books in the Library</div>

        <div class="grid-container">
            <?php

            if ($books === 0) {
                echo "No Book was found.<br><br><br><br><br>";
            } else {
                //display books in a grid; six books per row
                foreach ($books as $i => $book) {
                    $id = $book->getId();
                    $title = $book->getTitle();
                    $category = $book->getCategory();
                    $publish_date = new \DateTime($book->getPublish_Date()); //$book->getPublish_Date();
                    $image = $book->getImage();
//                    $description = $book->getDescription();
                    if (strpos($image, "http://") === false AND strpos($image, "https://") === false) {
                        $image = BASE_URL . "/" . BOOK_IMG . $image;
                    }
                    
                    //set 6 books to one row; ending div tag
                    if ($i % 6 == 0) {
                        echo "<div class='row'>";
                    }

                    //base url to show users where to go
                    echo "<div class='col'><p><a href='", BASE_URL, "/book/detail/$id'><img src='" . $image .
                    "'></a><span>$title<br>Category $category<br>" . $publish_date->format('m-d-Y') . "</span></p></div>";
                    ?>
                    <?php
                    //mark end of the row
                    if ($i % 6 == 5 || $i == count($books) - 1) {
                        echo "</div>";
                    }
                }
            }
            ?>  
        </div>
       
        <?php
        //display page footer
        parent::displayFooter();
    } //end of display method
}
