<?php
/*
1 5H 5C 6S 7S KD Pair of Fives 2C 3S 8S 8D TD Pair of Eights Player 2

*/

$input = '1 5H 5C 6S 7S KD 2C 3S 8S 8D TD Player 2';

//split the into an array by each space
$arrayNow = explode(" ", $input);

//Lets see what we got
print_r($arrayNow);

echo 'Player: ' . $arrayNow[0];
echo "\n";

//make a player 1 array
$player1Hand = array_slice($arrayNow, 1, 5);
// print_r($player1Hand);

//make a player 2 array
$player2Hand = array_slice($arrayNow, 8, 5);
// print_r($player2Hand);

//for each thing in the players hand
for($i=0; $i<count($player1Hand); $i++){

    $piece = str_split($player1Hand[$i]);
    echo "The piece is: ";
    print_r($piece);
    echo "\n";

    $primaryCard = $piece[0];
    echo '$primaryCard is: ' . $primaryCard;

    $cardSuit = $piece[1];
    echo ' and the suit is: ' . $cardSuit;


    for($j=1; $j<count($piece); $j++){
        // if $piece[$j] === 
        echo "\n";
    }
    // print_r($piece);
}







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

