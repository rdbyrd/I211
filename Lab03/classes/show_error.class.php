<?php

/*
 * Author: Louie Zhu
 * Date: Jan 22, 2017
 * File: show_error.php
 * Description: this script displays an error message.
 */
require_once 'application/app_view.class.php';

class ShowError {
    
    public function display($message) {
        AppView::displayHeader('Error');
        ?>

        <div id="main-header">Error</div>

        <table style="width: 100%; border: none">
            <tr>
                <td style="vertical-align: middle; text-align: center; width:100px">
                    <img src='www/img/error.jpg' style="width: 80px; border: none"/>
                </td>
                <td style="text-align: left; vertical-align: top;">
                    <h3>Sorry, but an error has occurred.</h3>
                    <div style="color: red">
                        <?= $message ?>
                    </div>
                    <br>
                </td>
            </tr>
        </table>
        <br><br><br><br><br>
        <hr>
        <a href="index.php">Go to movie list</a>
        <?php
        AppView::displayFooter();
        die();
    }
}