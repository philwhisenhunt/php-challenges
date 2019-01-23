<?php

function cardSuitMaker($player1Hand){

    $positionSuits = [];

    //turn into positionValues
    for($i=0; $i<count($player1Hand); $i++){
        $card = $player1Hand[$i];
        $positionSuits[] = $card[1];
    
    }

    return $positionSuits;
}

// //Makes a usable version of the player hand
// $player1Hand = '2H 3C 4S 5S 6D';
// $arrayNow = explode(" ", $player1Hand);
// $player1Hand = array_slice($arrayNow, 0, 5);

// print_r(cardSuitMaker($player1Hand));