<?php
//receive user input
//add to tic tac toe board
require 'determineWinner.php';
require 'boardPrinter.php';
require "whoWon.php";
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
$moveCounter = 0;
$continue = true;

do{
    //print the board
    boardPrinter($board);
   
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
                    $moveCounter++;
                    echo "The move count is now: $moveCounter \n";
                    $answer = determineWinner($board);
                    echo 'The $answer variable is printing as: ' . $answer . "\n";


                        if($answer === 1 || $answer === 2){
                            $answer = whoWon($answer, $moveCounter);
                            echo "Game Over: $answer";
                            echo boardPrinter($board);

                            die();
                        }

                        if($answer === 3 && $moveCounter > 8){
                            $answer = whoWon($answer, $moveCounter);
                            echo "Game Over: $answer";
                            echo boardPrinter($board);
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
                    $moveCounter++;
                    echo "The move count is now: $moveCounter \n";
                    $answer = determineWinner($board);
                    echo 'The $answer variable is printing as: ' . $answer . "\n";


                        if($answer === 1 || $answer === 2){
                            $answer = whoWon($answer, $moveCounter);
                            echo "Game Over: $answer";
                            echo boardPrinter($board);

                            die();
                        }

                        if($answer === 3 && $moveCounter > 8){
                            $answer = whoWon($answer, $moveCounter);
                            echo "Game Over: $answer";
                            echo boardPrinter($board);
                            die();

                        }
                    $user = 1;
                    echo "Now it is user1's turn \n \n";

                }
            }

      
    
        }

        
    } //end placeholder for valid input

} //end do 

while($continue === true);


echo "End of program";



