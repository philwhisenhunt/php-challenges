<?php

//Make a gameboard

//Should look like this:
/*
--- --- --- 
|   |   |   | 
 --- --- ---  
|   |   |   | 
 --- --- ---  
|   |   |   | 
 --- --- --- 

 */

 $test = "  --- --- --- 
 |   |   |   | 
  --- --- ---  
 |   |   |   | 
  --- --- ---  
 |   |   |   | 
  --- --- --- ";

//   echo $test;

  //so the first part will be to get that top row. 

  function rowMaker($userNumber){

    // $userNumber = 3;

    for($i=0; $i<$userNumber; $i++){
        echo " ---";
    }

    echo "\n";
    for($i=0; $i<$userNumber; $i++){
        echo "|   ";
    }
    echo "| \n";

}

function colMaker($userNumber){
    for($j=0; $j<$userNumber; $j++){
    echo rowMaker($userNumber);
    }
    for($i=0; $i<$userNumber; $i++){
        echo " ---";
    }
    echo "\n";
}

echo colMaker(3);
