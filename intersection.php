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

    for($i=1; $i<count($firstArray); $i++){
        // print_r($input[$i]);

        for($j=0; $j<count($input[$i]); $j++){
            //if $input[$i] DOES NOT CONTAIN $firstArray[$j].. 
            $compareArray = $input[$i];
            // print_r($compareArray);
            // echo " is the compareArray";
            if(in_array($firstArray[$j], $compareArray )){
                //keep going. 
                // intersection($compareArray);

                // And then if THATS there then keep going more. 
                $intersectionArray[] = $compareArray[$j];


            }

            else{
                break;
                // $intersectionArray[] = $input[$i][$j];
                // echo "found at point $i is i and $j is j \n";

            }

            //another else

        }

    }


    return $intersectionArray;
}

print_r(intersection([[1, 2, 3], [101, 2, 1, 10], [2, 1]]));