<?php
/*
 * Ryan Byrd
 * 9/12/2018
 * search_movie.class.php
 * A class that runs the display method to show all movies in a grid.
 */

//require the app_view class so that search bar can be used
require_once 'application/app_view.class.php';

//initiate the class for searching the movie
class SearchMovie {

    
//create the display function for matching terms with movies (2 paramaters)
    public function display($terms, $movies) {
        AppView::displayHeader("Search results");
        ?>

<!--Display the search terms by the header-->
        <div id="main-header"> Movies in the Library <?php echo "with the term " . $terms ?></div>
        <div class="grid-container">
            <?php

            if ($terms === 0) {
                echo "No search terms were found.<br><br><br><br><br>";
            } else {
                //display search terms in a header

                echo "<br><br>";

                if ($movies === 0) {
                    echo "No movie was found.<br><br><br><br><br>";
                } else {
                    //display movies in a grid; six movies per row
                    foreach ($movies as $i => $movie) {
                        $id = $movie->getId();
                        $title = $movie->getTitle();
                        $rating = $movie->getRating();
                        $release_date = $release_date = new DateTime($movie->getRelease_date());
                        $image = $movie->getImage();
                        if (strpos($image, "http://") === false AND strpos($image, "https://") === false) {
                            $image = MOVIE_IMG . $image;
                        }
                        if ($i % 6 == 0) {
                            echo "<div class='row'>";
                        }
                        echo "<div class='col'><p><a href='view_movie.php?id=" . $id . "'><img src='" . $image .
                        "'></a><span>$title<br>Rated $rating<br>" . $release_date->format('m-d-Y') . "</span></p></div>";
                        ?>
                        <?php
                        if ($i % 6 == 5 || $i == count($movies) - 1) {
                            echo "</div>";
                        }
                    }
                }
                ?>  
            </div>
            <?php
            AppView::displayFooter();
        }
    }

}
