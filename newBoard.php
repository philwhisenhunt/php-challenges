<?php

//Tic tac toe game

//Make a gameboard

//add slots to add user input in the gameboard
$piece = "  ---";
$blankGameBoard = 
        [
        ["  0 ", "   1 ", "   2 "],
        ["  ---", $piece, "  ---"], 
 ["0 ", "|", "   |", "   |", "   |"], 
         ["  ---", "  ---", "  ---"], 
  ["1 ", "|","   |", "   |", "   |"], 
        ["  ---", "  ---", "  ---"], 
  ["2 ", "|","   |", "   |", "   |"],
        ["  ---", "  ---", "  ---"]
        ];

  
$board =   [[0, 0, 0],
            [0, 0, 0],
            [0, 1, 2]];

function boardMaker($board){

    for($i=0; $i<count($board); $i++){
        for($j=0; $j<count($board[$i]); $j++){
    
    
            if($board[$i][$j] == 0){
                echo " |  |";
            }
    
            if($board[$i][$j] == 1){
                echo "|  x |";
            }
    
            if($board[$i][$j] == 2){
                echo "|  o |";
            }
    
    
            
        }
        echo "\n";
    }
}

echo boardMaker($board);