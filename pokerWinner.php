<?php
/*
1 5H 5C 6S 7S KD Pair of Fives 2C 3S 8S 8D TD Pair of Eights Player 2

Take a txt file and determine how many hands player 1 wins. 

So rank each type of hand
Then compare the ranks of each hand
If the ranks are the same, then rescan for high card. 

Check for pairs
If there is a pair check for three of a kind
    If there is a three of a kind, check for full house
If two pair, check for four of a kind
If pair but not three of a kind or four of a kind, then check for two pair  

check for straight:
    for each part, check for number lower than and greater than
    or sort the numbers and check for consequtive

check for flush{
    grab the suit (index[1])
    if the suit matches the next one
        keep going
    if they all match
        check for straight
    if straight flush
        check for royal flush
    return flush

}

Maybe have a different function for each thing to check?
*/

$input = '5H 5C 6S 7S KD 2C 3S 8S 8D TD';
//three of a kind
$input = '5H 5C 5S 7S KD 2C 3S 8S 8D TD';

//four of a kind
$input = '5H 5C 5S 5S KD 2C 3S 8S 8D TD';

//straight
$input = '2H 3C 4S 5S 6D 2C 3S 8S 8D TD';




//split the into an array by each space
$arrayNow = explode(" ", $input);

//make a player 1 array
$player1Hand = array_slice($arrayNow, 0, 5);
print_r($player1Hand);
die();

//make a player 2 array
$player2Hand = array_slice($arrayNow, 5, 5);
print_r($player2Hand);

//for each thing in the players hand
$pairCount = 0;
$threeOfAKind = 0;
$fourOfAKindCount = 0;
$straightCount = 0;
$flushCount = 0;
$fullHouseCount = 0;
$fourOfAKindCount = 0;
$straightFlushCount = 0;
$royalFlushCount = 0;
$consecutive = 0;



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
        $pairCount++;
    }


    if($pairCount == 2){
        $threeOfAKind = 1;
    }

    if($pairCount == 3){
        $fourOfAKindCount = 1;
    }

    if($singleCard[0] == ($futureCard[0] -1 ) || $singleCard[0] == ($futureCard[0] + 1)){
        echo "Consecutive.";
        echo "----------------";
        echo "\n";

        $consecutive++;

        if($singleCard[0] == ($futureCard[0] - 2 ) || $singleCard[0] == ($futureCard[0] + 2)){
            echo "Two cards in a row";
            echo "\n";

            echo "\n";

            echo "\n";

            echo "\n";

        }
    }
    echo '$singleCard[0] is: ' . ($singleCard[0]);
    echo "\n";

    echo '$futureCard[0] - 1 is: ' . ($futureCard[0] - 1);
    echo "\n";

    echo '$consecutive: ' . $consecutive;
    echo "\n";
  

   
    

/*
    for($j=0; $j<count($singleCard); $j++){

    }
*/

} //end for loop

//Testing area

// echo 'The $pairCount is: ' . $pairCount . "\n" . "\n";
// echo 'The $threeOfAKind is: ' . $threeOfAKind . "\n" . "\n";
// echo 'The $fourOfAKindCount is: ' . $fourOfAKindCount . "\n" . "\n";
// echo 'The $straightCount is: ' . $straightCount . "\n" . "\n";
// echo 'The $flushCount is: ' . $flushCount . "\n" . "\n";
// echo 'The $fullHouseCount is: ' . $fullHouseCount . "\n" . "\n";
// echo 'The $fourOfAKindCount is: ' . $fourOfAKindCount . "\n" . "\n";
// echo 'The $straightFlushCount is: ' . $straightFlushCount . "\n" . "\n";
// echo 'The $royalFlushCount is: ' . $royalFlushCount . "\n" . "\n";


