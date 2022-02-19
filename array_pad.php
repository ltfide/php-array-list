<?php 

$input = [12, 10, 9];

print_r(array_pad($input, 5, 1));

print_r(array_pad($input, 6, -2));

print_r(array_pad($input, 2, "noop"));