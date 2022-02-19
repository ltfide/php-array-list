<?php 

$keys = ["foo", 5, 10, "bar"];
$a = array_fill_keys($keys, "Banana");

print_r($a);