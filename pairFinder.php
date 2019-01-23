<?php

function pairFinder($player1Hand){
        
    for($i=1; $i<count($player1Hand); $i++){

    $singleCard = str_split($player1Hand[0]);
    // echo 'singleCard is: ';
    // print_r($singleCard);

    $futureCard = str_split($player1Hand[$i]);
        // echo 'futureCard is: ';
        // print_r($futureCard);

    // die();


    if($singleCard[0] == $futureCard[0]){
        // echo "It matches!!";
        $matchingCardCount++;
    }

    if($matchingCardCount == 3){
        
        return $fourOfAKindCount = 1;
    }

    if($matchingCardCount == 2){
        return $threeOfAKind = 1;
    }

   


    }
}