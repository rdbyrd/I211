<?php
/*
 * Author: Louie Zhu
 * Date: Jan 22, 2017
 * File: index.class.php
 * Description: this script defines the ListMovie class. The class contains a method named display, which
 *     accepts an array of Movie objects and displays them in a grid.
 * 
 */
require_once 'application/app_view.class.php';

class ListMovie {

    public function display($movies) {
        AppView::displayHeader("List All Movies"); 
        ?>

        <div id="main-header"> Movies in the Library</div>
        <div class="grid-container">
            <?php
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
                    if ($i%6 == 0) {
                        echo "<div class='row'>";
                    }
                    echo "<div class='col'><p><a href='view_movie.php?id=" . $id . "'><img src='" . $image .
                    "'></a><span>$title<br>Rated $rating<br>" . $release_date->format('m-d-Y') . "</span></p></div>";
                    ?>
                    <?php
                    if ($i%6 == 5 || $i == count($movies) - 1) {
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
