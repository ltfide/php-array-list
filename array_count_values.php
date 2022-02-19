<?php 

$array = [1,"world", 1, "hello", "world", "hello", "world"];
$countArray = array_count_values($array);

echo min($countArray) . PHP_EOL;

print_r(array_count_values($array));