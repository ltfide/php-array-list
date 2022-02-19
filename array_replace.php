<?php 

$base = ["orange", "banana", "apple", "raspberry"];
$replacements = [0 => "pineapple", 4 => "cherry"];
$replacements2 = [0 => "grape"];

$arr = [1, 2, 3, 4, 5, 6];

$basket = array_replace($base, $replacements, $replacements2);
print_r($basket);

print_r(array_replace($arr, $base));
