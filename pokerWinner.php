<?php

require 'straightFinder.php';
require 'flushFinder.php';
require 'royalFlushFinder.php';
require 'pairFinder.php';
require 'cardValueMaker.php';
require 'twoPairFinder.php';

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

//straight with face cards
$input = '9H TC JS QS KD 2C 3S 8S 8D TD';

//flush
$input = '2H 3H 4H 5H 9H 2C 3S 8S 8D TD';

//straight flush
$input = '2H 3H 4H 5H 6H 2C 3S 8S 8D TD';

//royal flush finder
$input = 'TH JH QH KH AH 2C 3S 8S 8D TD';

//three of a kind again
$input = '5H 5C 5S 7S KD 2C 3S 8S 8D TD';

//two pair
$input = '5H 5C 4S 4S KD 2C 3S 8S 8D TD';




//split the into an array by each space
$arrayNow = explode(" ", $input);

//make a player 1 array
$player1Hand = array_slice($arrayNow, 0, 5);
// print_r($player1Hand);
// die();

//make a player 2 array
$player2Hand = array_slice($arrayNow, 5, 5);
// print_r($player2Hand);

//for each thing in the players hand
$pairCount = 0;
$twoPairCount = 0;
$threeOfAKind = 0;
$fourOfAKindCount = 0;
$straightCount = 0;
$flushCount = 0;
$fullHouseCount = 0;
$fourOfAKindCount = 0;
$straightFlushCount = 0;
$royalFlushCount = 0;
$consecutive = 0;

$matchingCardCount = pairFinder($player1Hand);

if($matchingCardCount == 3){
    
    $fourOfAKindCount = 1;
    $threeOfAKind = 1;
    $pairCount = 2;
}

if($matchingCardCount == 2){
    $threeOfAKind = 1;
    $pairCount = 1;
}

if($matchingCardCount == 1){
    $pairCount = 1;

}

//check for two pairs
if(twoPairFinder($player1Hand)){
    $pairCount = 2;
    $twoPairCount = 1;
}



if(straightFinder($player1Hand)){
    $straightCount = 1;

    //then check for flush

}

if(flushFinder($player1Hand)){
    $flushCount = 1;

    //then check for flush

}

if($flushCount == 1 && $straightCount == 1){
    $straightFlushCount = 1;
}

if($straightFlushCount == 1){
    if(royalFlushFinder($player1Hand)){
        $royalFlushCount = 1;
    }
}
//Testing area

echo 'The $pairCount is: ' . $pairCount . "\n" . "\n";
echo 'The $twoPairCount is: ' . $twoPairCount . "\n" . "\n";
echo 'The $threeOfAKind is: ' . $threeOfAKind . "\n" . "\n";
echo 'The $fourOfAKindCount is: ' . $fourOfAKindCount . "\n" . "\n";
echo 'The $straightCount is: ' . $straightCount . "\n" . "\n";
echo 'The $flushCount is: ' . $flushCount . "\n" . "\n";
echo 'The $fullHouseCount is: ' . $fullHouseCount . "\n" . "\n";
echo 'The $fourOfAKindCount is: ' . $fourOfAKindCount . "\n" . "\n";
echo 'The $straightFlushCount is: ' . $straightFlushCount . "\n" . "\n";
echo 'The $royalFlushCount is: ' . $royalFlushCount . "\n" . "\n";


