<?php 

// #1 array_merge example
$array1 = ["color" => "red", 2, 4];
$array2 = ["a", "b", "color" => "green", "shape", "color" => 4, "trapezoid", 4];

print_r(array_merge($array1, $array2));

// #2 simple array_merge example
$array3 = [];
$array4 = [1 => "data"];

print_r(array_merge($array3, $array4));

$array5 = [0 => "zero_a", 2 => "two_a", 3 => "three_a", "three"];
$array6 = [1 => "one_b", 3 => "three_b", 4 => "four_b"];

$result = $array5 + $array6;
print_r($result);

// #3 array_merge with non-array types
$beginning = "foo";
$end = [1 => "bar"];

$result = array_merge((array)$beginning, (array)$end);
print_r($result);