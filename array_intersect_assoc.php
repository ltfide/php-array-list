<?php 

$array1 = ["a" => "green", "b" => "brown", "red", "c" => "blue", "red"];
$array2 = ["a" => "green", "b" => "yellow", "blue", "red"];

$result_array = array_intersect_assoc($array1, $array2);
print_r($result_array);