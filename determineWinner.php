<?php
//tic tac toe game

function determineWinner($board){

    for($i=0; $i<count($board); $i++){
        for($j=0; $j<count($board[$i]); $j++){
            
            //check diagonal from tpo left to bottom right 
            if(! empty($board[$i + 2][$j + 2])){
                    if( ($board[$i][$j] === $board[$i + 1][$j+1]) && ($board[$i][$j] === $board[$i+2][$j+2])) { 
                    // return "Winner";

                
                    echo "Winner diagonal tlbr";
                    echo "\n";

                    return $board[$i][$j];
                    echo "\n";

                }
            }
                
            //check vertical
            if(! empty($board[$i + 2][$j])){

                if(($board[$i][$j] === $board[$i+1][$j]) && ($board[$i][$j] === $board[$i+2][$j])){
                  

                    echo "Winner vertical";
                    echo "\n";

                    return $board[$i][$j];
                    echo "\n";
            
                }
            }
            
            //check horizontal
            if(! empty($board[$i][$j + 2])){

                if(($board[$i][$j] === $board[$i][$j+1]) && ($board[$i][$j] === $board[$i][$j+2])){
                    // return "winner";
                    echo "Winner  horizontal";
                    echo "\n";

                    return $board[$i][$j];
                    echo "\n";


                
            
                }
            }
            
            //check diagonal bottom left to top right
            if(! empty($board[$i-2][$j + 2])){

                if(($board[$i][$j] === $board[$i-1][$j+1]) && ($board[$i][$j] === $board[$i-2][$j+2])){
                    // return "Winner";
                    echo "Winner diagonal tlbr";
                    echo "\n";

                    return $board[$i][$j];
                    echo "\n";

            
                }
            }

        
            return 3;
        }

    }
   
}


