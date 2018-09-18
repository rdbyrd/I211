<?php
/*
 * Author: Ryan Byrd
 * Date: 9/4/2018
 * File: circle.php
 * Description: Enter form input into the coordinates.
 */
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>The Circle Application</title>
        <style>
            body {
                padding-left:30px; 
                padding-top:30px;
            }

            div {
                border:solid 1px #000; 
                width:300px; 
                padding: 10px;
            }

            table {
                border: none;
                border-collapse: collapse;
            }

            td {
                border: none;
                padding: 5px;
            }

            tr td:first-child {
                width: 100px;
                text-align: right;
            }
        </style>
    </head
    <body>
        <h2>The Circle Application</h2>
        <div>
            <?php
            
            //call the classes before instantiating objects
            require_once 'classes/point.class.php';
            require_once 'classes/circle.class.php';
            
            //display the input form when the page is first loaded
            if (!isset($_GET['xCoord']) || !isset($_GET['yCoord']) || !isset($_GET['radius'])) {
                require_once 'circle_form.php';

                } else {
                    
                    //get the data from the form 
                if ($_GET['xCoord'] <= 0 || $_GET['yCoord'] <= 0 || $_GET['radius'] <= 0) {
                    echo "Make sure your inputs are above 0.";
                    exit();
                    
                } else {

                    //pass all input as x, y, and radius variables for filling the object's parameters.
                    $xCoord = $_GET['xCoord'];
                    $yCoord = $_GET['yCoord'];
                    $radius = $_GET['radius'];
                    
                    //instantiate a new Point and Circle object, carry on the Point parameter in wich Circle.
                    $p = new Point($xCoord, $yCoord);
                    $c = new Circle($radius, $p);

                    //Reformat object data so that it appears.
                    echo $c->toString();
                }
            }
                ?>
        </div>
    </body>
</html>