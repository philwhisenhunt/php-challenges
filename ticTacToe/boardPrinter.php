<?php

function boardPrinter($board){

    echo "The board: \n";
    echo "  0    1    2 \n";
    $topPiece = "  ---  ---  --- \n";
    echo $topPiece;
    for($i=0; $i<count($board); $i++){
        echo $i . " |"; //set up the coordinates for the horizontal rows
        for($j=0; $j<count($board[$i]); $j++){
            if ($board[$i][$j] == 0){
                echo "   |";
            }

            if ($board[$i][$j] == 1){
                echo " x |";
            }

            if ($board[$i][$j] == 2){
                echo " o |";
            }
            
        }
    
        echo "\n";
        echo $topPiece;

    
    }
}