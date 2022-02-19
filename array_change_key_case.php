<?php 

$input_array = [
  "kEY" => 1,
  "keY" => 2,
  "second" => 4
];

print_r(array_change_key_case($input_array, CASE_LOWER));
