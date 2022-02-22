<?php 

// #1 array() example
$fruits = [
  "fruits" => ["a" => "orange", "b" => "banana", "c" => "apple"],
  "numbers" => [1,2,3,4,5,6],
  "holes" => ["first", 5 => "second", "third"]
];

// #2 automatic index with array() 
$array = array(1, 1, 1, 1,  1, 8 => 1,  4 => 1, 19, 3 => 13);
print_r($array);

// #3 1-based index with array()
$firstquarter = [1 => "january", "february", "march", 2 => "Mei"];
print_r($firstquarter);


// #4 accessing an array inside double quotes
$name = ["name" => "lutfi"];
echo "Hello {$name['name']}!";