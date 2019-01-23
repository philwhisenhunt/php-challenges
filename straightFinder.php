<?php


function straightFinder($player1Hand){
    for($i=1; $i<count($player1Hand); $i++){

        $firstCard = str_split($player1Hand[0]);
        $compareCard = str_split($player1Hand[$i]);

        if($firstCard[0] == ($compareCard[0] - 1)){
                echo "It matches \n";

                if($firstCard[0] == ($compareCard[0] - 2)){
                    echo "Another match \n";
                }

        }

        else{
            echo "Doesn't match \n";
        }
    }
}

$player1Hand = '2H 3C 4S 5S 6D';
$player1Hand = $arrayNow = explode(" ", $player1Hand);

$player1Hand = array_slice($player1Hand, 0, 5);
print_r($player1Hand);

echo straightFinder($player1Hand);
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