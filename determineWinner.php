<?php
//tic tac toe game

// $board = [[1, 2, 0],
// 	      [2, 1, 0],
//           [2, 1, 1]];

$board = [[1, 2, 0],
	      [2, 1, 0],
          [2, 1, 1]];
    
// function printer($board){
//     for($m=0; $m<count($board); $m++){
//         for($p=0; $p<count($board[$m]); $p++){
//             echo $board[$m][$p];
//         }
//     }

// }
    
// print_r($game);
// printer($board);
/*
for each number{
    check the numbers to the right by changing the x axis
    check the numbers below by changing the y axis
    check the numbers diagonally by checking the x + 1 and the y +1
}



*/

//check vertical
// [0][0]

function determineWinner($board){

    for($i=0; $i<count($board); $i++){
        for($j=0; $j<count($board[$i]); $j++){
            echo '$i:' . $i . "  ";
           
            echo '$j:' . $j . "  ";
            echo "\n";
        //check diagonal top left to bottom right
        if(! empty($board[$i + 2][$j + 2])){
            // if(1 === 1){
                echo "trueee";
            // if( ($board[$i][$j] === $board[$i + 1][$j+1]) && ($board[$i][$j] === $board[$i+2][$j+2])) { 
                if( ($board[$i][$j] === $board[$i + 1][$j+1]) && ($board[$i][$j] === $board[$i+2][$j+2])) { 
                // return "Winner";
                echo "Winner diagonal tlbr";
                echo "\n";

            }
        }
            
        //check vertical
        if(! empty($board[$i + 2][$j])){

            if(($board[$i][$j] === $board[$i+1][$j]) && ($board[$i][$j] === $board[$i+2][$j])){
                // return "winner";
                echo "Winner diagonal vertical";
                echo "\n";

        
            }
        }
        
        //check horizontal
        if(! empty($board[$i][$j + 2])){

            if(($board[$i][$j] === $board[$i][$j+1]) && ($board[$i][$j] === $board[0][$j+2])){
                // return "winner";
                echo "Winner diagonal horizontal";
                echo "\n";

        
            }
        }
        
        //check diagonal bottom left to top right
        if(! empty($board[$i-2][$j - 2])){

            if(($board[$i][$j] === $board[$i-1][$j-1]) && ($board[$i][$j] === $board[$i-2][$j-2])){
                // return "Winner";
                echo "Winner diagonal tlbr";
                echo "\n";

        
            }
        }

        else{
            // echo "nothing works";
            // echo "\n";
        }
    }



}
}



echo determineWinner($board);
