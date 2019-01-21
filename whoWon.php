<?php

function whoWon($input){

    if($input ===  4)
        {
            return "Game on forever! \n";
            echo "\n";
        }
    if($input ===  1)
        {
            return "The winner is Player 1 \n";
            echo "\n";
        }

    if($input ===  2)
        {
            return "The winner is Player 2 \n";
            echo "\n";
        }

    if($input === 3)
        {
            return "The game was a tie \n";
            echo "\n";

        }

    else{
        // return "The game goes on! ";
    }

}