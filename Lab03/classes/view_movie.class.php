<?php
/*
 * Author: Louie Zhu
 * Date: Jan 22, 2017
 * File: view_movie.class.php
 * Description: this script defines the ViewMovie class. The class contains a method named display, which
 *     accepts a Movie object and displays its details in a table.
 * 
 */
require_once 'application/app_view.class.php';

class ViewMovie {

    //display details of a movie
    public function display($movie, $confirm = "") {
        AppView::displayHeader('View Movie Details');

        //retrieve movie details by calling get methods
        $id = $movie->getId();
        $title = $movie->getTitle();
        $rating = $movie->getRating();
        $release_date = new DateTime($movie->getRelease_date());
        $director = $movie->getDirector();
        $image = $movie->getImage();
        $description = $movie->getDescription();

        if (strpos($image, "http://") === false AND strpos($image, "https://") === false) {
            $image = BASE_URL . '/'. MOVIE_IMG . $image;
        }
        ?>
        <div id="main-header">Movie Details</div>
        <hr>
        <!-- display movie details in a table -->
        <table id="detail">
            <tr>
                <td style="width: 150px;">
                    <img src="<?= $image ?>" alt="<?= $title ?>" />
                </td>
                <td style="width: 130px;">
                    <p><strong>Title:</strong></p>
                    <p><strong>Rating:</strong></p>
                    <p><strong>Release Date:</strong></p>
                    <p><strong>Director:</strong></p>
                    <p><strong>Description:</strong></p>
                </td>
                <td>
                    <p><?= $title ?></p>
                    <p><?= $rating ?></p>
                    <p><?= $release_date->format('m-d-Y') ?></p>
                    <p><?= $director ?></p>
                    <p class="media-description"><?= $description ?></p>
                    <div id="confirm-message"><?= $confirm ?></div>
                </td>
            </tr>
        </table>
        <a href='list_movie.php'>Go to movie list</a>
        <?php
        AppView::displayFooter();
    }

}
