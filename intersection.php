<?php

// Computes the list of values that are the intersection of all the arrays. Each value in the result is present in each of the arrays.

function intersection($input){
   
    $intersectionArray = [];

    $firstArray = $input[0];

    for($i=0; $i<count($firstArray); $i++){

        for($j=1; $j<count($input); $j++){
      
            if(! in_array($firstArray[$i], $input[$j] )){
                $missing = true;
                break;
            }

           
        }
         
        if (! $missing) {
            $intersectionArray[] = $firstArray[$i];
        }
    }


    return $intersectionArray;
}

print_r(intersection([[1, 2, 3], [101, 2, 1, 10], [2, 1]]));