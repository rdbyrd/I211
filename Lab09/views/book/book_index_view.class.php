<?php
/*
 * Author: Louie Zhu
 * Date: Mar. 30, 2016
 * Name: book_index_view.class.php
 * Description: the parent class that displays a search box. The search form is commented out here since the search feature is not implemented. 
 */

class BookIndexView extends IndexView {

    public static function displayHeader($title) {
        parent::displayHeader($title)
        ?>
        <script>
            //the media type
            var media = "book";
        </script>
        <!--create the search bar -->
        <!--
        <div id="searchbar">
            <form method="get" action="<?= BASE_URL ?>/book/search">
                <input type="text" name="query-terms" id="searchtextbox" placeholder="Search books by title" autocomplete="off">
                <input type="submit" value="Go"/>
            </form>
            <div id="suggestionDiv"></div>
        </div> -->
        <?php
    }

    public static function displayFooter() {
        parent::displayFooter();
    }
}