<?php

//Make a gameboard

//Tic tac toe game

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

function moveMakerO($userTypedYAxis, $userTypedXAxis){
    $tempArray = [" O |"];
    // $blankGameBoard = array_replace($blankGameBoard[$userTypedYAxis][$userTypedXAxis], $tempArray);
    $blankGameBoard[$userTypedYAxis][$userTypedXAxis] = " O |";
    return $blankGameBoard;
}

print_r(moveMakerO(1,1));


