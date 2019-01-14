<?php

// Computes the list of values that are the intersection of all the arrays. Each value in the result is present in each of the arrays.

function intersection($input){
    //loop through first array. 
    //Take a value and look for it in the next array. If its there keep going. If its there for all of them then assign that value to array. 
    //Perhaps make a function to check it?
    $intersectionArray = [];


    // echo "The input is ";
    // print_r($input);

    $firstArray = $input[0];

    // echo "The first array is ";
    // print_r($firstArray);
    // die();

    for($i=0; $i<count($firstArray); $i++){
        
        for($j=1; $j<count($input[$j]); $j++){
            //if $input[$i] DOES NOT CONTAIN $firstArray[$j].. 
            $compareArray = $input[$j];
            if($firstArray[$i] !== $compareArray[$j]){
                echo "Not found at point ";
                echo "$i is i and $j is j \n";
            }

            else{
                $intersectionArray[] = $input[$i][$j];
                echo "found at point $i is i and $j is j \n";

            }

            //another else

        }

    }


    return $intersectionArray;
}

print_r(intersection([[1, 2, 3], [101, 2, 1, 10], [2, 1]]));