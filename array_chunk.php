<?php 

$input_array = ["a", "b", "c", "d"];
print_r(array_chunk($input_array, 2, false));
print_r(array_chunk($input_array, 2, true));
$result = array_chunk($input_array, 2, true);

foreach ($result as $key => $value) {
  foreach($value as $row) {
    var_dump($row);
  }
}
