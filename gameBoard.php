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

  
function convertToNewYAxis($userInputY){

    if($userInput === 0){
        $userTypedYAxis = 2;
        return $userTypedYAxis;

    }
    if($userInput === 1){
        $userTypedYAxis = 4;
        return $userTypedYAxis;

    }

    if($userInput === 2){
        $userTypedYAxis = 6;
        return $userTypedYAxis;

    }
}

function convertToNewXAxis($userInputX){
    $userTypedXAxis  = $userInputX + 2;
    return $userTypedXAxis;
}


// userTypedXAxis
// userTypedYAxis



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

echo "The new converted number is " . convertToNewYAxis($userTypedYAxis) . "\n";
$userArray = [];
// $userArray[$userTypedXAxis][$userTypedYAxis] = "| O ";

//So first, print a blank game board

// printTheBoard($blankGameBoard);
// echo "Want to play? \n";
// echo "\n";

// Assign the previous version of the array to a holding pattern, with the new array


      //Just do y first, then x..

        /*

        Used for figuring out the user conversions
$blankGameBoard[$userTypedYAxis + 2][$userTypedXAxis + 2] = " 0 |"; //00
$blankGameBoard[$userTypedYAxis + 4][$userTypedXAxis + 2] = " 0 |"; //10
$blankGameBoard[$userTypedYAxis + 6][$userTypedXAxis + 2] = " 0 |"; //20
$blankGameBoard[$userTypedYAxis + 6][$userTypedXAxis + 3] = " 0 |"; //21
$blankGameBoard[$userTypedYAxis + 6][$userTypedXAxis + 4] = " 0 |"; //22
*/

//x axis is always the position plus 2
//for the y axis, 
