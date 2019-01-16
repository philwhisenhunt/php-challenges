<?php
//tic tac toe game

$board = [[1, 2, 0],
	      [2, 1, 0],
          [2, 1, 1]];
    
function printer($board){
    for($m=0; $m<count($board); $m++){
        for($p=0; $p<count($board[$m]); $p++){
            echo $board[$m][$p];
        }
    }

}
    
// print_r($game);
printer($board);