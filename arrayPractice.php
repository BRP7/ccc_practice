<?php

//1. - Creates a new array.
// array() or []:
$arr = array();
$arr=[];

$arrOne = array(1,2,3);
$arrTwo=[5,4,6];

// 2- Merges two or more arrays.
// array_merge($array1, $array2):
// print_r (array_merge($arrOne,$arrTwo));
//Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 5 [4] => 4 [5] => 6 )

// 3. array_combine($keys, $values):
// - Creates an array by using one array for keys and another for its values.

// print_r(array_combine($arrOne,$arrTwo));//Array ( [1] => 5 [2] => 4 [3] => 6 )
$strArrOne=["hii","how","are","you"];
$strArrTwo=["I","am","fine","& you"];

// print_r(array_combine($strArrOne,$strArrTwo));//Array ( [hii] => I [how] => am [are] => fine [you] => & you )


$strArrOne=["hii","how","are","you"];
$strArrTwo=["I","am","fine"];
// print_r(array_combine($strArrOne,$strArrTwo));//($keys) and argument #2 ($values) must have the same number of elements 


$strArrOne=["hii","are","you"];
$strArrTwo=["I","am","fine","& you"];
// print_r(array_combine($strArrOne,$strArrTwo));//($keys) and argument #2 ($values) must have the same number of elements

// 4. range($start, $end, $step(op,1)):
// - Creates an array containing a range of elements.

$arrOne=range(1,5,3);
// print_r($arrOne);//Array ( [0] => 1 [1] => 4 )
$arrOne=range(1,5,1);//Array ( [0] => 1 [1] => 3 [2] => 5 )
// print_r($arrOne);//Array ( [0] => 1 [1] => 4 )
$arrOne=range(1,5);
// print_r($arrOne);//Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )

// 2. Array Modification:

    // 5. array_push($array, $element) or $array[] = $element:
    //    - Adds one or more elements to the end of an array.

     $pushArr=array_push($arr,3);
    //  print_r($pushArr);//1
    //  print_r($arr);//Array ( [0] => 3 )

    // 6. array_pop($array):
    //    - Removes the last element from an array. & returns it!
    // print_r(array_pop($arr));//3


    // 7. array_unshift($array, $element):
    //    - Adds one or more elements to the beginning of an array.
    //   print_r(array_unshift($arr,5));//2//array_unshift(), indicating the new number of elements in the array.
    //   print_r($arr);//Array ( [0] => 5 [1] => 3 )
    //   print_r(array_unshift($arr,5,76,89));//5 Array ( [0] => 5 [1] => 76 [2] => 89 [3] => 5 [4] => 3 )


    // 8. array_shift($array):
        //    - Removes the first element from an array.
    // print_r($arr);//Array ( [0] => 3 )
    // echo "<br>";
    // print_r(array_shift($arr));//3
    // echo "<br>";
    // print_r($arr);//Array ()


    // 9. array_splice($array, $start, $length, $replacement):
    //-  used to remove a portion of an array and replace it with something else. It can be used to add, remove, or replace elements in an array. 
    // Initial array
    // $originalArray = [1, 2, 3, 4, 5];

    // // Using array_splice to replace elements starting from index 1
    // $replacement = [10, 11, 12];
    // array_splice($originalArray, 1, count($originalArray), $replacement);

    // // Display the modified array
    // print_r($originalArray);//Array ( [0] => 1 [1] => 10 [2] => 11 [3] => 12 )

    // 10. count($array):
    //  - Counts the number of elements in an array.
    //   echo count($strArrOne);//3
    
    // 11. sizeof($array):
    // - Alias of count().
    //   echo sizeof($strArrOne);//3

    $myArray = [1, 2, 3, 4, 5];

    // Using count()
    $countUsingCount = count($myArray);

    // Using sizeof()
    $countUsingSizeof = sizeof($myArray);

    // echo "Count using count(): $countUsingCount\n";
    // echo "Count using sizeof(): $countUsingSizeof\n";
  //In PHP, count() and sizeof() are essentially the same function, they have identical behavior.
  //Count using count(): 5 Count using sizeof(): 5
  

//   12. array_key_exists($key, $array):
//   - Checks if the given key or index exists in the array.//retrnd false

// Example array
$array = array("a" => 1, "b" => 2, "c" => 3);

// Check if the key 'b' exists in the array
// if (array_key_exists("b", $array)) {
//     echo "Key 'b' exists in the array.<br>";
// } else {
//     echo "Key 'b' does not exist in the array.<br>";
// }

// // Check if the key 'd' exists in the array
// if (array_key_exists("d", $array)) {
//     echo "Key 'd' exists in the array.<br>";
// } else {
//     echo "Key 'd' does not exist in the array.<br>";
// }

    // 13. array_keys($array):
   // - Returns all the keys or a subset of the keys of an array.

   // Example array-it returns an array 
        $array = array("a" => 1, "b" => 2, "c" => 3, "d" => 2);

        // Get all keys of the array
        $allKeys = array_keys($array);

        // Get keys with a specific value (e.g., 2)
        $keysWithValueTwo = array_keys($array, 2);

        // Display the results
        // echo "All keys: ";
        // print_r($allKeys);//returns array of key => All keys: Array ( [0] => a [1] => b [2] => c [3] => d ) 

        // echo "Keys with value 2: ";
        // print_r($keysWithValueTwo);//Keys with value 2: Array ( [0] => b [1] => d )

        // 14. array_values($array):
        // - Returns all the values of an array.
        // Example array

            $array = array("a" => "abc", "b" => "pqr", "c" => "xyz");

            // Get all values of the array
            $allValues = array_values($array);

            // Display the results
            // echo "All values: ";
            // print_r($allValues);//All values: Array ( [0] => abc [1] => pqr [2] => xyz )


            // 4. Array Search:

            // 15. in_array($needle, $haystack):
                // - Checks if a value exists in an array.

                // Example array
            $array = array("apple", "banana", "orange", "grape");

            // Check if "banana" exists in the array
            // if (in_array("banana", $array)) {
            //     echo "The value 'banana' exists in the array.<br>";
            // } else {
            //     echo "The value 'banana' does not exist in the array.<br>";
            // }

            // // Check if "pear" exists in the array
            // if (in_array("pear", $array)) {
            //     echo "The value 'pear' exists in the array.<br>";
            // } else {
            //     echo "The value 'pear' does not exist in the array.<br>";
            // }
            //The value 'banana' exists in the array.
            //The value 'pear' does not exist in the array.



            // 16. array_search($needle, $haystack):
            //     - Searches an array for a given value and returns the corresponding key.

            // Example array
            // $array = array("apple", "banana", "orange", "grape");
            // $keyOfBanana = array_search("banana", $array);
            // echo "Key of 'banana': $keyOfBanana<br>";//Key of 'banana': 1
            // $keyOfPear = array_search("pear", $array);
            // echo "Key of 'pear': $keyOfPear<br>";//Key of 'pear':




            // 17. array_reverse($array):
            //  - Returns an array with elements in reverse order.
             // Example array
            // $array = array("apple", "banana", "orange", "grape");
            // $reversedArray = array_reverse($array);
            // echo "Original array: ";
            // print_r($array);//Original array: Array ( [0] => apple [1] => banana [2] => orange [3] => grape )
            // echo "Reversed array: ";
            // print_r($reversedArray);//Reversed array: Array ( [0] => grape [1] => orange [2] => banana [3] => apple )



            // 5. Array Sorting:
            $array = array("apple", "banana", "orange", "grape");
            $arrayAsso = array("a" => "abc", "b" => "pqr", "c" => "xyz");

            //sort in array it self and return 1 

        // 18. sort($array):
        //     - Sorts an array.
            echo "Sorts an array:  ";
            print_r(sort($array));//returns 1
            print_r($array);
            // 19. rsort($array):
            // - Sorts an array in reverse order.
            echo "<br>Sorts an array in reverse order:  ";
            print_r(rsort($array));
            print_r($array);
            // 20. asort($array):
            // - Sorts an associative array by values.
            echo "<br> sorts an associative array by value :";
            print_r(asort($arrayAsso));
            print_r($arrayAsso);
            // 21. ksort($array):
            // - Sorts an associative array by keys.
            echo "<br> sorts an associative array by Key :";
            print_r(ksort($arrayAsso));
            print_r($arrayAsso);
            // 22. arsort($array):
            // - Sorts an associative array in reverse order by values.
            echo "<br> Sorts an array in reverse order by value:  ";
            print_r(arsort($arrayAsso));
            print_r($arrayAsso);
            // 23. krsort($array):
            // - Sorts an associative array in reverse order by keys.
            echo "<br> Sorts an array in reverse order by key:  ";
            print_r(krsort($arrayAsso));
            print_r($arrayAsso);
           





    












?>