<?php
//tic tac toe game



$board = [[1, 2, 0],
	      [2, 1, 0],
          [2, 1, 1]];

$board2 =  [[1, 2, 1],
            [2, 2, 2],
            [1, 1, 1]];

$board3 =  [[0, 0, 0],
            [0, 0, 0],
            [0, 0, 0]];

$board3 =  [[1, 0, 0],
            [1, 0, 0],
            [1, 0, 0]];

$board4 =  [[1, 0, 2],
            [1, 0, 2],
            [0, 0, 2]];

$board5 = [[1,1,2],
            [2,2,1],
            [1,1,2]];


function determineWinner($board){

    for($i=0; $i<count($board); $i++){
        for($j=0; $j<count($board[$i]); $j++){
            // echo '$i:' . $i . "  ";
           
            // echo '$j:' . $j . "  ";
            // echo "\n";
        //check diagonal top left to bottom right
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
                // return "winner";

                // echo $board[$i][$j];
                // echo $board[$i+1][$j];
                // echo $board[$i+2][$j];

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

        else{
            // echo "OOPS";
            
           
        }

        return 3;
    }



}
}

function whoWon($input){
    if($input ===  1)
    {
        return "The winner is Player 1";
        echo "\n";
    }

    if($input ===  2)
    {
        return "The winner is Player 2";
        echo "\n";
    }

    if($input === 3){
        return "The game was a tie";
        echo "\n";

    }

}

function spitter($board){
    foreach($board as $square){
        print $square;
    }
}



// echo determineWinner($board);
echo whoWon(determineWinner($board5));
echo "\n";

