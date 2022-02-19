<?php 

// #1 array_slice examples
$input = ["a", "b", "c", "d", "e"];

print_r(array_slice($input, 3));
print_r(array_slice($input, -2, 1));
print_r(array_slice($input, 0, 3));

// note the differences in the array keys
print_r(array_slice($input, 2, -2, true));
print_r(array_slice($input, 2, -1, true));

// #2 array_slice and one-base array
$input = [1 => "a", "b", "c", "d", "e"];
print_r(array_slice($input, 1, 2));

// #3 array_slice and array with mixed keys
$arr = ["a" => "apple", "b" => "banana", "42" => "pear", "d" => "orange"];
print_r(array_slice($arr, 0, 3));
print_r(array_slice($arr, 0, 3, true));