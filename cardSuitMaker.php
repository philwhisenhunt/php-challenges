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

