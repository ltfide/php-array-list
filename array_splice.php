<?php 

// #1 array_splice examples
$input = ["red", "green", "blue", "yellow"];
array_splice($input, 2);
var_dump($input);

$input2 = ["red", "green", "blue", "yellow"];
array_splice($input2, 1, -2);
var_dump($input2);

$input3 = ["red", "green", "blue", "yellow"];
array_splice($input3, -2, 2, ["black", "marron"]);
var_dump($input3);


// #2 equivalent statements to various array_splce examples

// remove two elements to $input
// $x = "X";
// $y = "Y";
// array_push($input, $x, $y);
// array_splice($input, count($input), 0, [$x, $y]);

// remove the last element of input
$input4 = ["red", "green", "blue", "yellow"];
// array_pop($input4);
// array_splice($input4, -1);
// var_dump($input4);

// remove the first element of $input
// array_shift($input4);
// array_splice($input4, 0, 1);
// var_dump($input4);

// insert an element at the start of $input
array_unshift($input4, "tiga");
array_splice($input4, 0, 0, ["empat", "lima"]);
var_dump($input4);