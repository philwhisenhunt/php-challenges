<?php
//receive user input
//add to tic tac toe board

$board =  [[0, 0, 0],
            [0, 0, 0],
            [0, 0, 0]];

$i = 0;
$j = 0;
$user = 1;

do{
    //print the board
    echo "The board: \n";
    for($i=0; $i<count($board); $i++){
        for($j=0; $j<count($board[$i]); $j++){
            echo $board[$i][$j] . " ";
        }
    
        echo "\n";
    
    }

    //accept the input
    $userInput = readline("\nUser number $user ,Type your coordinates here, separated by a comma \n");

    //check for valid input
    if(1===1){

        $userInput = explode(",", $userInput);

        $i = $userInput[0];
        $j = $userInput[1];
        echo "\nYou typed: " . $i . " and ". $j . "\n \n";
        
        //assign the new coordinate to the board

        if($i >= 3 || $i<0 || $j >= 3 || $j<0){
            echo "You wasted a turn! \n";

            if($user == 1){
                $user = 2;
            }

            if($user == 2){
                $user = 1;
            }
        }

        elseif($board[$i][$j] == 1 || $board[$i][$j] == 2){
            echo "Spot is taken, try again \n\n";
            //But needs to not allow input. 
            if($user == 1){
                $user = 2;
            }

            if($user == 2){
                $user = 1;
            }
        }

        else{
            //User 1 makes a move
            if($user == 1){
                if($i < 3 && $i>=0 && $j < 3 && $j>=0){
                    $board[$i][$j] = 1;
                    $user = 2;
                    echo "Now it is user2's turn \n \n";

                }  
            }

            //User 2 makes a move
            else{
                if($i < 3 && $i>=0 && $j < 3 && $j>=0){
                    $board[$i][$j] = 2;
                    $user =1;
                    echo "Now it is user1's turn \n \n";

                }
            }

            //Next step is to 
            //1. remove the space steal
            //2. No allowing J to be higher than 2.
    
        }
$continue = true;
    }
}

while($continue === true);

echo "are we here?";






//break apart the userInput
//first one is assigned to $i
//second one is assigned to $j
//$board[$i][$j] = 1;

