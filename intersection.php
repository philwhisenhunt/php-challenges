<?php

// Computes the list of values that are the intersection of all the arrays. Each value in the result is present in each of the arrays.

function intersection($input){
    //loop through first array. 
    //Take a value and look for it in the next array. If its there keep going. If its there for all of them then assign that value to array. 
    //Perhaps make a function to check it?
    $intersectionArray = [];
    $firstArray = $input[0];
    for($i=1; $i<count($firstArray); $i++){
        
        for($j=0; $j<count($input); $j++){
            //if $input[$i] DOES NOT CONTAIN $firstArray[$j].. 
            if($firstArray[$i] !== $input[$i[$j]]){
                return "Skip this one";
            }
                //then return "I'm out"
            
        }

    }


    return $intersectionArray;
}

print_r(intersection([1, 2, 3], [101, 2, 1, 10], [2, 1]));