<?php
//load Class file
require_once 'hourly_worker.class.php';
?>

<!DOCTYPE html>
<!--
/*
 * Ryan Byrd
 * 8/24/2018
 * hourly_worker.php
 * I211 lab 1 - page to interface with the user by displaying hourly earnings
 */
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hourly Worker</title>
    </head>
    <body>
        <h1>Hourly Worker Earnings</h1>
        <?php
        
        //instances of persons
        $person1 = new HourlyWorker('Jimmy', 'Johns', 9.99, 40);
        $person2 = new HourlyWorker('Jonny', 'Cash', 400, 20);
        
        //display data calling from the pre-established HourlyWorker class.
        echo $person1->getName() . " earns $" . $person1->getWeeklyEarnings() . " per week.<br/>";
        echo $person2->getName() . " earns $" . $person2->getWeeklyEarnings() . " per week.<br/>";
        ?>
    </body>
</html>
