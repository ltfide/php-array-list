<?php 

$array1 = ["blue" => 1, "red" => 2, "green" => 3, "purple" => 4];
$array2 = ["green" => 5, "yellow" => 7, "cyan" => 8];

var_dump(array_diff_key($array2, $array1));


$array3 = ["blue" => 1, "red" => 2, "green" => 3, "purple" => 4];
$array4 = ["green" => 5, "yellow" => 7, "cyan" => 8];
$array5= ["blue" => 6, "yellow" => 7, "mauve" => 8];

var_dump(array_diff_key($array3, $array4, $array5));