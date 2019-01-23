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
            $positionValues[] = 14;

        }

        else{
            $positionValues[] = $card[0];
        }
    
    }
    
    return $positionValues;

}
