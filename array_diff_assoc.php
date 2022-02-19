<?php 

$array1 = ["a" => "green", "b" => "brown", "c" => "blue", "red", "x" => "yellow", "Hitam"];
$array2 = ["a" => "green", "yellow", "red"];

$result = array_diff_assoc($array1, $array2);

print_r($result);

$array3 = [1, 02, 10];
$array4 = ["00", "02", "10"];

$result = array_diff_assoc($array3, $array4);

print_r($result);