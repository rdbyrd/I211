<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Display Car Class</title>
    </head>
    <body>
        <h1>Car Object</h1>
        <?php
       require_once 'car.class.php';
        
       //instantiate car object
       $car1 = new Car("Saturn", "Saturn", "1999", "Green");
       
       echo "Your car is a " . $car1->get_model() . ", the year is " . $car1->get_year() . ", and the color is"
               . ""
               . " " . $car1->get_color() . ".";
        
        ?>
    </body>
</html>
