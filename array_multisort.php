<?php 

// # sorting multiple arrays
$arr1 = [10, 100, 1000, 0,1];
$arr2 = [1, 3, 4, 2,5];
array_multisort($arr1, $arr2);

var_dump($arr1);
var_dump($arr2);

// sorting multi-dimensional array
$arr = [
  ["10", 11, 100, 100, "a"],
  [1, 2, "2", 3, 1]
];

array_multisort($arr[0], SORT_ASC, SORT_STRING,
                $arr[1], SORT_NUMERIC, SORT_DESC);
                
var_dump($arr);

// #3 sorting database results
$data[] = array('volume' => 67, 'edition' => 2);
$data[] = array('volume' => 86, 'edition' => 1);
$data[] = array('volume' => 85, 'edition' => 6);
$data[] = array('volume' => 98, 'edition' => 2);
$data[] = array('volume' => 86, 'edition' => 6);
$data[] = array('volume' => 67, 'edition' => 7);

// Obtain a list of columns
foreach ($data as $key => $row) {
  $volume[$key]  = $row['volume'];
  $edition[$key] = $row['edition'];
}

// as of PHP 5.5.0 you can use array_column() instead of the above code
$volume  = array_column($data, 'volume');
$edition = array_column($data, 'edition');

// Sort the data with volume descending, edition ascending
// Add $data as the last parameter, to sort by the common key
echo array_multisort($volume, SORT_DESC, $edition, SORT_ASC, $data);

// #4 cae insensitive sorting
$array = ["Alpha", "atomic", "Beta", "bank"];
$array_lowercase = array_map("strtolower", $array);

array_multisort($array_lowercase, SORT_ASC, SORT_STRING, $array);

var_dump($array);