<?php 

// #1 array_unique example
$input = ["a" => "green", "red", "b" => "green", "blue", "red"];

print_r(array_unique($input));

// #2 array_unique and types
$input2 = [4, "4", "3", 4, 3, "3"];

print_r(array_unique($input2));