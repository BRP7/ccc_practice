<?php

// Basic Arithmetic
$number = -5.75;

// abs() - Returns the absolute value of a number
$absResult = abs($number);
echo "abs($number) = $absResult<br>";

// ceil() - Rounds a number up to the nearest integer
$ceilResult = ceil($number);
echo "ceil($number) = $ceilResult<br>";

// floor() - Rounds a number down to the nearest integer
$floorResult = floor($number);
echo "floor($number) = $floorResult<br>";

// round() - Rounds a number to the nearest integer or specified number of decimal places
$roundedResult = round($number, 1);
echo "round($number, 1) = $roundedResult<br><br>";


// Power Functions
$base = 2;
$exponent = 3;

// pow() - Returns the value of a base raised to the power of an exponent
$powResult = pow($base, $exponent);
echo "pow($base, $exponent) = $powResult<br>";

// sqrt() - Returns the square root of a number
$sqrtResult = sqrt($powResult);
echo "sqrt($powResult) = $sqrtResult<br><br>";


// Random Number Generation
$min = 10;
$max = 50;

// rand() - Generates a random integer between the specified minimum and maximum
$randomResult = rand($min, $max);
echo "rand($min, $max) = $randomResult<br><br>";


// Number Formatting
$numberToFormat = 1234567.89;
$decimals = 2;
$decimal_point = '.';
$thousands_separator = ',';

// number_format() - Formats a number with grouped thousands and a specified number of decimals
$formattedNumber = number_format($numberToFormat, $decimals, $decimal_point, $thousands_separator);
echo "number_format($numberToFormat, $decimals, '$decimal_point', '$thousands_separator') = $formattedNumber<br>";

?>
