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
    $userMove = 0;

    for($i=0; $i<$userNumber; $i++){
        // $rowArray[$i] = " ---";
        echo " ---";
    }

    echo "\n";
    for($i=0; $i<$userNumber; $i++){

        if($userMove === 0){
            echo "|  x ";
        }
        else{
            echo "|   ";
        }

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

// $blankGameboard =  colMaker(3);
// echo $blankGameboard;

//now see if we can make it with arrays. 

$fullGameBoard = 
[["  0 ", "   1 ", "   2 "],
 ["  ---", "  ---", "  ---"], 
 ["0 ", "| x ", "| x ", "| x |"], 
 ["  ---", "  ---", "  ---"], 
 ["1 ", "| x ", "| x ", "| x |"], 
 ["  ---", "  ---", "  ---"], 
 ["2 ", "| x ", "| x ", "| x |"],
 ["  ---", "  ---", "  ---"]];

// print_r($fullGameBoard);
// print_r($fullGameBoard);

function printTheBoard($fullGameBoard){
    for($m=0; $m<count($fullGameBoard); $m++){
        for($p=0; $p<count($fullGameBoard[$m]); $p++){
         print_r($fullGameBoard[$m][$p]);
         
        }
     //    echo " --- ";
     echo "\n";
     }
}

//accept x axis then y axis
$userTypedX = 1;
$userTypedY = 1;
printTheBoard($fullGameBoard);