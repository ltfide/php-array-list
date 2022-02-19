<?php 

$array = [0 => 100, "yellow", "purple" => "1", "color" => "red"];

print_r(array_keys($array));

$array1 = ["blue", "red", "green", "blue", "blue"];

print_r(array_keys($array1, "green"));

$array2 = ["color" => ["blue", "red", "green"], "size" => ["small", "medium", "large"]];

print_r(array_keys($array2));

