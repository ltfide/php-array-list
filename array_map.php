<?php 

// #1 array_map example
function cube($n)
{
    return ($n * $n);
}

$array = [1,2,3,4,5];
print_r(array_map("cube", $array));

// #2 array_map using lambda fnction
$func = function ($value) {
  return $value * 2;
};

print_r(array_map($func, range(1, 6)));

// #3 array_map using more arrays
function show_Spanish($n, $m) 
{
    return "The number {$n} is called {$m} in Spanish";
}

function map_Spanish($n, $m) 
{
    return [$n => $m];
}

// #4 performing a zip operation of arrays
$number = [1,2,3,4,5];
$number2 = ["one", "two", "three", "four", "five"];
$name = ["uno", "dos", "tres", "cuatro", "cinco"];

print_r(array_map("show_Spanish", $number, $name));

print_r(array_map("map_Spanish", $number, $name));

print_r(array_map(null, $number, $number2, $name));

// #5 null callback with only array
var_dump(array_map(null, $number));

// #6 array_map with string keys
$arr = ["stringkey" => "lutfi"];

function cb1($a) {
  return [$a];
}

function cb2($a, $b) {
  return [$a, $b];
} 

var_dump(array_map("cb1", $arr));
var_dump(array_map("cb2", $arr, $arr));