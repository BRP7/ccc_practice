<?php
$array = array("a" => 1, "b" => 2, "c" => 3, "d" => "2");

// Get all keys of the array
$allKeys = array_keys($array);
print_r($allKeys);//Array ( [0] => a [1] => b [2] => c [3] => d ) 

// Get keys with a specific value (e.g., 2)
$keysWithValueTwo = array_keys($array, 2);
print_r($keysWithValueTwo);//Array ( [0] => b [1] => d ) 

// Get keys with a specific value (e.g., 2)//true type & value both evaluated & false only value
$keysWithValueTwo = array_keys($array, 2, true);
print_r($keysWithValueTwo);//Array ( [0] => b )
?>