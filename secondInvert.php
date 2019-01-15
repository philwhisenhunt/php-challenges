<?php
// take in a key value pair and invert it. Key becomes value and value.. becomes key.
//But this time use map

function secondInvert($input){
    //make two new arrays
    //put all the keys in one
    //put all the values in another
    //then use map to put them back together again
    $combinedArray = [];
    $first = array_keys($input);
    // print_r($first);

    $second = array_values($input);
    // print_r($second);
    
    //now, zip the two together with array_map
    //loop through first array and assign to new array
    for($i=0; $i<count($first); $i++){
        $combinedArray[$i] = $second[$i];
    }
    return $combinedArray;
    
}

$testArray = ['first'=>'second', 'third'=>'fourth', 'fifth'=>'sixth'];

// print_r(invertirizer($testArray)); 

// $result = array_map("secondInvert", $testArray);

// print_r($result);
print_r(secondInvert($testArray));