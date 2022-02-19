<?php 

$input = ["php", 4.0, ["green", "red"]];
$reversed = array_reverse($input);
$preserved = array_reverse($input, true);

print_r($input);
print_r($reversed);
print_r($preserved);