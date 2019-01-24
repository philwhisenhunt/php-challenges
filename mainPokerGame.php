<?php

//take the file
$pokerHands = fopen('smallPoker.txt', 'r') or die("Unable to open file!");
// echo fread($pokerHands, filesize('poker.txt'));

if($pokerHands) {
    while(($line = fgets($pokerHands)) !== false){
        echo $line;
        $arrayNow = explode(" ", $line);
        // print_r($arrayNow);
        //make a player 1 array
        $player1Hand = array_slice($arrayNow, 0, 5);
        echo '$player1Hand is: ';
        print_r($player1Hand);
        echo "\n";


        $player2Hand = array_slice($arrayNow, 5, 5);
        echo '$player2Hand is: ';
        print_r($player2Hand);
        echo "\n";




    }
}




//grab the first 10 cards


//split into an array by each space
// $arrayNow = explode(" ", $pokerHands);
// print_r($arrayNow);
// die();

//make a player 1 array
// $player1Hand = array_slice($arrayNow, 0, 5);
// echo '$player1Hand is: ';
// print_r($player1Hand);
// echo "\n";
// die();

//make a player 2 array
// $player2Hand = array_slice($arrayNow, 5, 5);
// print_r($player2Hand);














fclose($pokerHands);
//spit it out.