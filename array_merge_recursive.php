<?php 

$arr1 = ["color" => ["favorite" => "red"], 5];
$arr2 = [10, "color" => ["favorite" => "green", "blue"]];

$result = array_merge_recursive($arr1, $arr2);
print_r($result);