<?php
/*
1 5H 5C 6S 7S KD Pair of Fives 2C 3S 8S 8D TD Pair of Eights Player 2

*/

$input = '1 5H 5C 6S 7S KDPair of Fives 2C 3S 8S 8D TDPair of Eights Player 2';

//split the into an array by each space
$arrayNow = explode(" ", $input);

//Lets see what we got
print_r($arrayNow);

echo 'Player: ' . $arrayNow[0];
echo "\n";

//make a player 1 array
$player1Hand = array_slice($arrayNow, 1, 5);
print_r($player1Hand);

//make a player 2 array
$player2Hand = array_slice($arrayNow, 8, 5);
print_r($player2Hand);


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
*/