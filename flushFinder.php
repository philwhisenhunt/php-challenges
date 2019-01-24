<?php

require 'cardSuitMaker.php';

function flushFinder($player1Hand){
    $sameSuitCount = 0;
    $positionSuits = cardSuitMaker($player1Hand);
    // print_r($positionSuits);

    for($i=0; $i<count($positionSuits); $i++){
        if($positionSuits[0] == $positionSuits[$i]){
            $sameSuitCount++;

        }
    }

    // echo 'sameSuitCount is: ' . $sameSuitCount . "\n";

    if($sameSuitCount == 5){
        return true;
    }

}
