<?php 

$array1 = array("a" => "green", "red", "blue", "red", "blue");
$array2 = array("b" => "green", "yellow", "red", "purple");

$result = array_diff($array2, $array1);

print_r($result);
    
