<?php 

$fruits = ["d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple"];

function test_alter($item1, $key, $prefix)
{
    $item1 = "$prefix : $item1";
}

function test_print($item2, $key)
{
    echo "$key : $item2" . PHP_EOL;
}

echo "Before ... :" . PHP_EOL;
array_walk($fruits, "test_print");

array_walk($fruits, "test_alter", "fruit");
echo "... and after : " . PHP_EOL;

array_walk($fruits,"test_print");