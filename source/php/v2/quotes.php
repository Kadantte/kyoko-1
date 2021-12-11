<?php
error_reporting(0);
header('Content-type: application/json');

$array = file_get_contents('data/quotes.json');
$string = json_decode($array, true);
$one_item = $string[rand(0, count($string) - 1)];
echo json_encode ($one_item); 