<?php

//Tic tac toe game

//Make a gameboard
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

    if($userInputY === 0){
        $userTypedYAxis = 2;
        return $userTypedYAxis;

    }
    if($userInputY === 1){
        $userTypedYAxis = 4;
        return $userTypedYAxis;

    }

    if($userInputY === 2){
        $userTypedYAxis = 6;
        return $userTypedYAxis;

    }
}

function convertToNewXAxis($userInputX){
    $userTypedXAxis  = $userInputX + 2;
    return $userTypedXAxis;
}

$userTypedXAxis = 2;
$userTypedYAxis = 2;
function printTheBoard($inputGameBoard, $userTypedXAxis, $userTypedYAxis){

    $userTypedXAxis = convertToNewXAxis($userTypedXAxis);
    $userTypedYAxis = convertToNewYAxis($userTypedYAxis);

    for($m=0; $m<count($inputGameBoard); $m++){
        for($p=0; $p<count($inputGameBoard[$m]); $p++){
            //if user input is equal to $m or $p, print O?
            if(($userTypedXAxis === $p) && ($userTypedYAxis === $m)){
                $inputGameBoard[$m][$p] = " O |";
                print_r($inputGameBoard[$m][$p]);

                // print_r(" O |");

            }
            else{
                print_r($inputGameBoard[$m][$p]);

            }
        }
   
     echo "\n";
     }
     return $inputGameBoard;
}


function moveMakerO($userTypedYAxis, $userTypedXAxis){
    $tempArray = [" O |"];
    array_splice($blankGameBoard[$userTypedYAxis][$userTypedXAxis], 1, $tempArray);
    return $blankGameBoard;
}


printTheBoard($blankGameBoard, $userTypedXAxis, $userTypedYAxis);

