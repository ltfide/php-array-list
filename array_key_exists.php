<?php 

$search_array = ["first" => 1, "second" => 4];

if (array_key_exists("third", $search_array)) {
  echo "Matched" . PHP_EOL;
} else {
  echo "Not Mached" . PHP_EOL;
}

isset($search_array["first"]); // returns false

array_key_exists("first", $search_array); // returns true