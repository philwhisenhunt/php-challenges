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

$blankGameBoard = 
        [
        ["  0 ", "   1 ", "   2 "],
        ["  ---", "  ---", "  ---"], 
 ["0 ", "|", "   |", "   |", "   |"], 
         ["  ---", "  ---", "  ---"], 
  ["1 ", "|","   |", "   |", "   |"], 
        ["  ---", "  ---", "  ---"], 
  ["2 ", "|","   |", "   |", "   |"],
        ["  ---", "  ---", "  ---"]
        ];

$blankGameBoard[$userTypedXAxis + 2][$userTypedYAxis + 2] = " 0 |"; //00
$blankGameBoard[$userTypedXAxis + 4][$userTypedYAxis + 2] = " 0 |"; //01
$blankGameBoard[$userTypedXAxis + 6][$userTypedYAxis + 2] = " 0 |"; //02



// print_r($blankGameBoard);
// print_r($blankGameBoard);

function printTheBoard($inputGameBoard){
    for($m=0; $m<count($inputGameBoard); $m++){
        for($p=0; $p<count($inputGameBoard[$m]); $p++){
         print_r($inputGameBoard[$m][$p]);
        //  echo "m$m, p$p";
         
        }
     //    echo " --- ";
     echo "\n";
     }
}

//accept x axis then y axis
$userTypedXAxis = 1;
$userTypedYAxis = 1;
$userArray = [];
// $userArray[$userTypedXAxis][$userTypedYAxis] = "| O ";

//So first, print a blank game board
printTheBoard($blankGameBoard);
echo "Want to play? \n";
echo "\n";