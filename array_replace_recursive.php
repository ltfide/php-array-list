<?php 

// #1 array_replace_recursive example
$base = ["citrus" =>["orange"], "berries" => ["blackberry", "raspberry"]];
$replacements = ["citrus" => ["pineapple"], "berries" => ["blueberry"]];

$basket = array_replace_recursive($base, $replacements);
print_r($basket);

$basket2 = array_replace_recursive($replacements, $base);
print_r($basket2);

// #2 array_replace_recursive and recursive behavior
$base2 = ["citrus" => ["orange"], "berries" => ["blackberry", "raspberry"], "others" => "banana"];
$replacements2 = ["citrus" => "pineapple", "berries" => ["blueberry"], "others" => ["litchis"]];
$replacements3 = ["citrus" => ["pineapple"], "berries" => ["blueberry"], "others" => "litchis"];

$basket3 = array_replace_recursive($base2, $replacements2, $replacements3);

print_r($basket3);