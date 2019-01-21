<?php
//receive user input
//add to tic tac toe board
require 'determineWinner.php';
require 'boardPrinter.php';
// require 'newBoard.php';

$board =  [[0, 0, 0],
            [0, 0, 0],
            [0, 0, 0]];

$rowMaker = [0,0,0];
$expBoard = [$rowMaker, $rowMaker, $rowMaker];
$board = $expBoard;


$i = 0;
$j = 0;
$user = 1;

do{
    //print the board
    // echo "The board: \n";
    // echo "  0    1    2 \n";
    // $topPiece = "  ---  ---  --- \n";
    // echo $topPiece;
    // for($i=0; $i<count($board); $i++){
    //     echo $i . " |"; //set up the coordinates for the horizontal rows
    //     for($j=0; $j<count($board[$i]); $j++){
    //         if ($board[$i][$j] == 0){
    //             echo "   |";
    //         }

    //         if ($board[$i][$j] == 1){
    //             echo " x |";
    //         }

    //         if ($board[$i][$j] == 2){
    //             echo " o |";
    //         }
            
    //     }
    
    //     echo "\n";
    //     echo $topPiece;

    
    // }

    boardPrinter($board);
    // echo boardMaker($board);


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
            echo "Number is too small or negative, try again \n";
        }

        elseif($board[$i][$j] == 1 || $board[$i][$j] == 2){
            echo "Spot is taken, try again \n\n";
        }

        else{
            //User 1 makes a move
            if($user == 1){
                if($i < 3 && $i>=0 && $j < 3 && $j>=0){
                    $board[$i][$j] = 1;
                    $answer = determineWinner($board);
                    boardPrinter($board);


                    if($answer === 1 || $answer === 2){
                        $answer = whoWon($answer);
                        echo "received: $answer";
                        die();
                    }
                  

                    $user = 2;
                    echo "Now it is user2's turn \n \n";

                }  
            }

            //User 2 makes a move
            else{
                if($i < 3 && $i>=0 && $j < 3 && $j>=0){
                    $board[$i][$j] = 2;
                    $answer = determineWinner($board);
                    boardPrinter($board);

                    if($answer === 1 || $answer === 2){
                        $answer = whoWon($answer);
                        echo "received: $answer";
                        die();
                    }
                    $user =1;
                    echo "Now it is user1's turn \n \n";

                }
            }

      
    
        }
$continue = true;
        
    } //end placeholder for valid input

} //end do 

while($continue === true);


echo "End of program";



// if(! whoWon(determineWinner($board))){
        //     $continue = true;
        // }

        // else{
        //     $continue = false;

        // }


//break apart the userInput
//first one is assigned to $i
//second one is assigned to $j
//$board[$i][$j] = 1;


//illegal move, and ask for another one. 