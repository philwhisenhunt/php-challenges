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
        // print_r($input[$i]);

        for($j=1; $j<count($input); $j++){
            //if $input[$i] DOES NOT CONTAIN $firstArray[$j].. 
            // $compareArray = $input[$i];
            // print_r($compareArray);
            // echo " is the compareArray";
            if(! in_array($firstArray[$i], $input[$j] )){
                //keep going. 
                $missing = true;
                break;
                // And then if THATS there then keep going more. 
                $intersectionArray[] = $compareArray[$j];
                //Then 

            }

           
        }
          //now that we've done that, compare intersectionArray to the next array? 
        //   for($k =0; $k<count($intersectionArray); $k++){
        //       if(in_array($))
        //   }
        if (! $missing) {
            $intersectionArray[] = $firstArray[$i];
        }
    }


    return $intersectionArray;
}

print_r(intersection([[1, 2, 3], [101, 2, 1, 10], [2, 1]]));