<?php
/*
 * Author: Louie Zhu
 * Date: Jan 22, 2017
 * File: database.class.php
 * Description: the class defines two static methods for creating page header and footer.
 * 
 */
//load configuration file
require_once 'application/config.php';

class AppView {

    //this method displays the page header
    public static function displayHeader($page_title) {
        ?>
        <!DOCTYPE html>
        <html>
            <head>
                <title> <?php echo $page_title ?> </title>
                <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
                <link rel="shortcut icon" href="www/img/favicon.ico" type="image/x-icon" />
                <link type="text/css" rel="stylesheet" href="www/css/app_style.css" />
                <script>
                    base_url = "<?= BASE_URL ?>";
                </script>
            </head>
            <body>       
                <div id="top"></div>
                <div id='wrapper'>
                    <div id="banner">
                        <a href="index.php" style="text-decoration: none" title="Kung Fu Panda Media Library">
                            <div id="left">
                                <img src='www/img/logo.png' style="width: 180px; border: none" />
                                <span style='color: #000; font-size: 36pt; font-weight: bold; vertical-align: top'>
                                    Media Library!
                                </span>
                                <div style='color: #000; font-size: 14pt; font-weight: bold'>An interactive application programmed with OOP approach</div>
                            </div>
                        </a>
                        <div id="right">
                            <img src="www/img/kungfupanda.png" style="width: 400px; border: none" />
                        </div>
                    </div>
					<div id="searchbar">
                        <form method="get" action="search_movie.php">
                            <input type="text" name="query-terms" id="searchtextbox" placeholder="Search movies by title" autocomplete="off">
                            <input type="submit" value="Go" />
                        </form>
                    </div>

                    <?php
                } //end of displayHeader method

                //this method displays the page footer
                public static function displayFooter() {
                    ?>
                    <br><br><br>
                    <div id="push"></div>
                </div>
                <div id="footer"><br>&copy 2015 Kung Fu Panda Media Library. All Rights Reserved.</div>
            </body>
        </html>
        <?php
    }

//end of displayFooter method
}
