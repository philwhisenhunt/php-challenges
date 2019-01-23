<?php


function straightFinder($positionValues){
    for($i=1; $i<count($positionValues); $i++){

       //compare to the rest of the cards
       echo '$i is: '. $i . "\n";

        if($positionValues[0] == ($positionValues[$i] - 1) || $positionValues[0] == ($positionValues[$i] + 1)){
                echo "It matches \n";
                if($positionValues[0] == ($positionValues[$i] - 2) || $positionValues[0] == ($positionValues[$i] + 2)){
                    echo "It matches twice \n";
    
            }
        }

        // else{
        //     echo "Doesn't match \n";
        // }
    }
}

$player1Hand = '2H 3C 4S 5S 6D';
$player1Hand = $arrayNow = explode(" ", $player1Hand);

$player1Hand = array_slice($player1Hand, 0, 5);
// print_r($player1Hand);

$positionValues = [];
$positionSuit = [];
for($i=0; $i<count($player1Hand); $i++){
    $card = $player1Hand[$i];
    $positionValues[] = $card[0];
    $positionSuit[] = $card[1];
}
echo "The position values: \n";
//  print_r($positionValues);
//  print_r($positionSuit);

echo "--- \n And now for the function \n --- \n";
echo straightFinder($positionValues);
echo "\n";

/*
Might be easier to break the two part card name into two parts. 
Take all the things and sort them
Then check that thing for gaps
give each card a number value.
*/
$cardsInOrder = [2,3,4,5,6,7,8,9,"T","J","Q","K","A"];
/*
compare the card to the ordered array
if its there, search for both the before and after in the array. 
*/
