<?php 

$array1 = array("a" => "green", "yellow", "red", "blue");
$array2 = array("b" => "green", "yellow", "red");

$result = array_intersect($array2, $array1);

print_r($result);