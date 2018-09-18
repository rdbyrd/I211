<?php

//generate a random number and store it in a cookie
if (isset($_COOKIE['random'])) {
    $random = $_COOKIE['random'];
} else {
    $random = rand(1, 100);
    setcookie("random", $random);
}

//retrieve player's guess
$guess = (int) ($_GET['guess']);

if ($guess > $random) {
    echo json_encode(array("result" => 1));
} elseif ($guess < $random) {
    echo json_encode(array("result" => -1));
} else {
    echo json_encode(array("result" => 8));
}