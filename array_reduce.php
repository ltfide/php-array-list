<?php 

function sum($carry, $item)
{
    $carry += $item;
    return $carry;
}

function product($carry, $item)
{
    $carry *= $item;
    return $carry;
}

$array1 = [1, 2, 3, 4, 5];
$array2 = [];

var_dump(array_reduce($array1, "sum"));
var_dump(array_reduce($array1, "product", 10));

var_dump(array_reduce($array2, "sum", "No data to reduce"));