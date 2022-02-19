<?php 

$stack = ["orange", "banana", "apple", "raspberry"];
$fruit = array_shift($stack);

print_r($stack);
print_r($fruit);

$fruit1 = array_shift($stack);

print_r($fruit1);
print_r($stack);