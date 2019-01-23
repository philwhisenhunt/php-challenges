<?php

function cardValueMaker($player1Hand){

    $positionValues = [];

    //turn into positionValues
    for($i=0; $i<count($player1Hand); $i++){
        // echo "WORKING \n \n";
        $card = $player1Hand[$i];

        if($card[0] == 'T'){
            $positionValues[] = 10;
            // echo "there is a T \n";
        }

        elseif($card[0] == 'J'){
            $positionValues[] = 11;

        }

        elseif($card[0] == 'Q'){
            $positionValues[] = 12;

        }

        elseif($card[0] == 'K'){
            $positionValues[] = 13;

        }

        elseif($card[0] == 'A'){
            $positionValues[] = 13;

        }

        else{
            $positionValues[] = $card[0];
        }
    
    }
    // echo 'Position Values are: ';
    // print_r($positionValues);
    return $positionValues;

}

// //Makes a usable version of the player hand
// $player1Hand = '2H 3C 4S 5S 6D';
// $arrayNow = explode(" ", $player1Hand);
// $player1Hand = array_slice($arrayNow, 0, 5);

// print_r(cardValueMaker($player1Hand));