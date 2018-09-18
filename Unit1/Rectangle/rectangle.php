<?php

require_once 'rectangle.class.php';

//create new rectangle
$r1 = new Rectangle(30, 20);
$r2 = new Rectangle(5, 10);

/*
//set height and width of rectangles
$r1 ->set_width(30);
$r1 ->set_height(20);

$r2 ->set_width(5);
$r2 ->set_height(10);
*/

//calculate the areas and perimeters of the two rectangles
$area = $r1->calculate_area();
$perimeter = $r1->calculate_perimeter();

echo "Rectangle 1: area=$area; perimeter=$perimeter <br/>";

$area = $r2->calculate_area();
$perimeter = $r2->calculate_perimeter();

echo "Rectangle 2: area=$area; perimeter=$perimeter";
