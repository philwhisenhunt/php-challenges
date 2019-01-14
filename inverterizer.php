<?php
// take in a key value pair and invert it. Key becomes value and value.. becomes key.

function invertirizer($input){
    //make a new array
    $outputArray = [];
    //for each thing in the array as a key value pair, take the value and make it the new array, and make the array the value. 
    foreach($input as $key=>$value){
        $outputArray[$value] = $key;
    }
    return $outputArray;
}

$testArray = ['first'=>'second', 'third'=>'fourth'];

echo invertirizer($testArray);