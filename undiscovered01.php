<?php
//write a function that takes in a number
//returns every even fibonacci number up to that number 

//write out fibonacci
//check for even
//if even, then spit it out

// start with a for loop
function fibEven($input){
    for($i=0; $i<$input; $i++){
        if($i<3){
            return $i;
        }

        else{
            return fibEven($i-1) + fibEven($i-2);
     
        }
        // echo $result;
        echo "\n";
    }
}

echo fibEven(10);



