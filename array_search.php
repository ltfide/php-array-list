<?php 

$array = [0 => "blue", 1 => "red", 2 => "green", 3 => "red"];
$array2 = [1, 2, 3, 4, 5];

print_r(array_search("red", $array));

print_r(array_search(5, $array2));