<?php

/*
Ryan Byrd
10/04/2018
cylinder.php
create a circle object, then output all of its data on a form
*/

//get classes
require_once 'circle.class.php';
require_once 'cylinder.class.php';

//get input from user
if (filter_has_var(INPUT_GET, 'radius')) {
//make user see input as output with two decimals
    $radius = filter_input(INPUT_GET, 'radius', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
}

//get filter from user
if (filter_has_var(INPUT_GET, 'height')) {
    //make user see input as output with two decimals
    $height = filter_input(INPUT_GET, 'height', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
}

//initialize an object to output info
$cylinder = new Cylinder($radius, $height);

//output the toString method from cylinder.class.php that is transferred to this object.
echo $cylinder -> toString();
