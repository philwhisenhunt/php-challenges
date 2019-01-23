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
    grab the suit
    if the suit matches the next one, keep going
    if they all match, check for straight
    royal flush
    return flush

}

Maybe have a different function for each thing to check?
*/

$input = '5H 5C 6S 7S KD 2C 3S 8S 8D TD';


//split the into an array by each space
$arrayNow = explode(" ", $input);

//Lets see what we got
// print_r($arrayNow);

echo 'Player: ' . $arrayNow[0];
echo "\n";
echo "\n";


//make a player 1 array
$player1Hand = array_slice($arrayNow, 0, 5);
print_r($player1Hand);

//make a player 2 array
$player2Hand = array_slice($arrayNow, 5, 5);
print_r($player2Hand);

//for each thing in the players hand
$pairCount = 0;
for($i=1; $i<count($player1Hand); $i++){

    $singleCard = str_split($player1Hand[0]);
    // echo 'singleCard is: ';
    // print_r($singleCard);

    $futureCard = str_split($player1Hand[$i]);
        // echo 'futureCard is: ';
        // print_r($futureCard);

    // die();


    if($singleCard[0] == $futureCard[0]){
        echo "It matches!!";
        $pairCount++;

        echo "\n";

        echo "\n";
    }

    if($pairCount == 2){
        $threeOfAKind = 1;
    }

    if($pairCount == 3){
        $fourOfAKind = 4;
    }
   
   

/*
    for($j=0; $j<count($singleCard); $j++){

    }
*/

    
   
    // print_r($singleCard);
}
echo 'The $pairCount is: ' . $pairCount . "\n";







//scan for each of the ten ways. 

//start with an easy one. Pairs

/*
Take the first card, see if any of the others match it
If they do, count how many match it.

For each hard
how many match it by number
How many match it by suit

Scan this
5H 5C 6S 7S KD

Pairs: 1
Suit-match: 0

Do I really need to separate that last card from the distinction? 


For each entry in hand{
    Grab an element
    grab first number
    If it matches, then matchCount++
    Then check suit
    If suit matches, then suitCount++
    If suitCount === 5, then flush

    If matchCount === 3{
        threeOfaKind = 1;
    }

    if matchCount === 4{
        fourOfaKindCount = 1
    }

    start at 0, check all 4 following
    for 1, check the following there too,
}
*/

