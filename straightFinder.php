<?php


function straightFinder($player1Hand){

    $positionValues = [];
    $positionSuit = [];

    //turn into positionValues
    for($i=0; $i<count($player1Hand); $i++){
        $card = $player1Hand[$i];
        $positionValues[] = $card[0];
        $positionSuit[] = $card[1];
    
    }

    //sort position values
    sort($positionValues);
    $amountInOrder = 0;
    for($i=1; $i<count($positionValues); $i++){
        // echo $positionValues[$i];
        if($positionValues[$i] == ($positionValues[0]+ $i)){
            // echo "ordered \n";
            $amountInOrder++;
        }
     echo $amountInOrder . "\n";
    }

    if ($amountInOrder == 4){
        echo "It is a straight";
        return true;
    }
    else{
        return false;
    }
}
//Makes a usable version of the player hand
$player1Hand = '2H 3C 4S 5S 6D';
$arrayNow = explode(" ", $player1Hand);
$player1Hand = array_slice($arrayNow, 0, 5);


echo "--- \n And now for the function \n --- \n";
echo straightFinder($player1Hand);
echo "\n";

//convert the face cards into numbers, then sort the whole thing and check to see if missing anything

// $cardsInOrder = [2,3,4,5,6,7,8,9,"T","J","Q","K","A"];


