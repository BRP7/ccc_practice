<?php

$sentence = "The quick brown fox jumps over the lazy dog";

// 1. Find the position of the word "fox" in the sentence.
$positionOfFox = strpos($sentence, "fox");//16 starting from 0
echo "1. Position of 'fox' in the sentence: $positionOfFox\n";

// 2. Check if the word "cat" is present in the sentence using strstr.
$containsCat = strstr($sentence, "cat") !== false;
echo "2. Does the sentence contain 'cat'? " . ($containsCat ? "Yes" : "No") . "\n";

// 3. Extract and print the first 20 characters of the sentence.
$first20Characters = substr($sentence, 0, 20);
echo "3. First 20 characters of the sentence: $first20Characters\n";

?>
