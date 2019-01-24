<?php

require 'cardValueMaker.php';

function twoPairFinder($player1Hand){
    $uniquePairCount = 0;
    $positionValues = cardValueMaker($player1Hand);
    // print_r($positionValues);
    // die();

    for($i=0; $i<count($positionValues); $i++){
        //find a matching number
        //add it to an array
        //if they are all the same, then return fourOfAKind
        //otherwise, check for full house
        //finally, return two pairs

        //take first value, compare everything to it 
        //take the next value, compare the rest of the values to it. 

        for($j=($i+1); $j<count($positionValues); $j++){
            echo '$positionValues[$i] is ' . $positionValues[$i];
            echo "\n";
            echo '$positionValues[$j] is ' . $positionValues[$j];
            echo "\n";
            echo "\n";

            if($positionValues[$i] == ($positionValues[$j])){
                $uniquePairCount++;
                echo '$uniquePairCount is '. $uniquePairCount;
                echo "\n";
                echo "\n";
                
            }
        }
    }   
}

//Makes a usable version of the player hand
$player1Hand = '2H 3C 4S 5S 6D';
$player1Hand = '3H 4C 5S 6S 7D';
$player1Hand = '5H 5C 4S 4S KD';
$arrayNow = explode(" ", $player1Hand);
print_r($arrayNow);
$player1Hand = array_slice($arrayNow, 0, 5);
print_r($player1Hand);


twoPairFinder($player1Hand);