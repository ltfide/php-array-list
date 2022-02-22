<?php 

$sweet = ["a" => "apple", "b" => "banana"];
$fruits = ["sweet" => $sweet, "sour" => "lemon"];
$contoh = ["green", ["blue", "red"]];

function test_print($item, $key)
{
    echo "$key holds $item" . PHP_EOL;

}

array_walk_recursive($fruits, "test_print");