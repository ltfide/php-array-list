<?php 

$input = ["Neo", "Morpheus", "Trinity", "Cypher", "Tank"];
$rand_keys = array_rand($input, 3);

echo $input[$rand_keys[0]] . PHP_EOL;
echo $input[$rand_keys[1]] . PHP_EOL;
echo $input[$rand_keys[2]] . PHP_EOL;
