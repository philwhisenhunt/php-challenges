<?php
/*
If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9. The sum of these multiples is 23.

Find the sum of all the multiples of 3 or 5 below the provided parameter value number.

*/
function threeFiveFinder($input){
    //make a for loop
    $arrayOfMultiples = [];
    for($i=0; $i < $input; $i++){
        //if the number %3 || %5 === 0, then
        if($i%3 === 0 || $i%5 === 0){
            $arrayOfMultiples[] = $i;
        }

    }
    //now add up everything in the array
    
    return $arrayOfMultiples;


    //add it to new array

    //then go through array and add all those numbers together (sum)
}
$input = 10;
print_r(threeFiveFinder($input));