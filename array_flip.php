<?php 

$input = ["oranges", "apples", "pears", "mango", 1];
$flipped = array_flip($input);

print_r($flipped);

$input2 = ["a" => 1, "b" => 1, "x" => 2, "z" => 2];
$flipped2 = array_flip($input2);

print_r($flipped2);