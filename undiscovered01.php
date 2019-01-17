<?php
//write a function that takes in a number
//returns every even fibonacci number up to that number 

//write out fibonacci
//check for even
//if even, then spit it out

function fib3($input){

    $x = 0;    
    $y = 1; 
    $stored[] = $y;
    echo "\n";
    for($i=0;$i<=$input;$i++)    
    {    
        $z = $x + $y;    
        $stored[] =  $z;
        $x=$y;       
        $y=$z;     
    }   

    for($i=0; $i<count($stored); $i++){

        if(($stored[$i] % 2) === 0){
            print_r($stored[$i]);
            echo "\n";
        }

        else{
            // echo "bleh \n";
        }



    }
}

echo fib3(70);








