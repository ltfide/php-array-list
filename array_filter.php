<?php 

function odd($var)
{
    // returns whether the input integer is odd
    return $var & 1;
}

function even($var)
{
    // returns whether the input integer is even
    return ! ($var & 1);
}

$array1 = ["a" => 1, "b" => 2, "c" => 3, "d" => 4, "e" => 5];
$array2 = [6, 7, 8, 9, 10, 11, 12];

echo "Odd : " . PHP_EOL;
print_r(array_filter($array1, "odd"));

echo "Even : " . PHP_EOL;
print_r(array_filter($array2, "even"));


$entry = [
  0 => "foo",
  1 => false,
  2 => -1,
  3 => null,
  4 => "",
  5 => "0",
  6 => 0,
];

print_r(array_filter($entry));


$arr = ["a" => 1, "b" => 2, "c" => 3, "d" => 4];

var_dump(array_filter($arr, function ($k) {
  return $k == "b";
}, ARRAY_FILTER_USE_KEY));


var_dump(array_filter($arr, function ($v, $k) {
  return $k == "b" || $v == 4;
}, ARRAY_FILTER_USE_BOTH));