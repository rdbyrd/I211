<?php
//Ryan Byrd
//9/27/2018
//zip_lookup.php
//Output the integer in the console.log file

//call up the database class file
require_once 'zip_lookup.class.php';

//get the integer typed in, sanitize
$zip = filter_input(INPUT_GET, 'zip', FILTER_SANITIZE_NUMBER_INT); 

//initialize an object to output info
$lookup = new ZipLookup();

//encode response so it can be viewed
echo json_encode($lookup ->lookup($zip));



