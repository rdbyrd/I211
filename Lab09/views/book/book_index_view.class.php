<?php
/*
 * Author: Ryan Byrd
 * Date: 11/8/2018
 * Name: book_index_view.class.php
 * Description: Make the page display the index of books 
 */

class BookIndexView extends IndexView {

    public static function displayHeader($title) {
        parent::displayHeader($title)
        ?>
        <script>
            //the media type
            var media = "book";
        </script>
        <!--create the search bar--> 
        
        <div id="searchbar">
            <form method="get" action="<?= BASE_URL ?>/book/search">
                <input type="text" name="query-terms" id="searchtextbox" placeholder="Search books by title" autocomplete="off">
                <input type="submit" value="Go"/>
            </form>
            <div id="suggestionDiv"></div>
        </div> 
        <?php
    }

    public static function displayFooter() {
        parent::displayFooter();
    }
}