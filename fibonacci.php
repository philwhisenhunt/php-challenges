<?php

/*
Each new term in the Fibonacci sequence is generated by adding the previous two terms. By starting with 1 and 2, the first 10 terms will be:

1, 2, 3, 5, 8, 13, 21, 34, 55, 89, ...

By considering the terms in the Fibonacci sequence whose values do not exceed nth term, find the sum of the even-valued terms.

*/

function fibFinder($input){
    //for loop up until the $input
    //first number is 1
    //then second number is 2
    //then for each
    //while loop here?
    //array = [1,2]


    //ok so add the first two numbers together, 
    //if it doesn't exceed the $input then add it to the array

    $fibo = [1,2];
    //find the length and the length minus one
    $length = count($fibo);
    // echo $length;
    // echo $fibo[$length-1];
    // echo $fibo[$length - 2];
    while(count($fibo) <= $input){
        $fibo[] = $fibo[$length-1] + $fibo[$length - 2];
        $length += 1;
        // print_r($fibo);
        // $fibo[] = $fibo[$length-1] + $fibo[$length - 2];

    }

    $fibo2 = [];
    for($i=0; $i<count($fibo); $i++){
        if($fibo[$i] % 2 === 0){
            $fibo2[] = $fibo[$i];
        }
    }
    // print_r($fibo2);
    return array_sum($fibo2);
    // while($fibo[$length] + $fibo[$length - 1]) < $input{
    //     $fibo[] = $fibo[$length] + $fibo[$length - 1];
    // }

}

echo fibFinder(10) . " ";
echo fibFinder(23) . " ";
echo fibFinder(43) . " ";
