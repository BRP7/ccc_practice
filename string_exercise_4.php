<?php

$name = "John";

// 1. Pad the string with underscores on the left side to make its total length 10 characters.
$paddedLeft = str_pad($name, 10, "_", STR_PAD_LEFT);
echo "1. Padded with underscores on the left: $paddedLeft\n";

// 2. Pad the string with asterisks on the right side to make its total length 8 characters.
$paddedRight = str_pad($name, 8, "*", STR_PAD_RIGHT);
echo "2. Padded with asterisks on the right: $paddedRight\n";

?>