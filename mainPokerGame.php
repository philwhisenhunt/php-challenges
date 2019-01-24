<?php
require 'pokerWinner.php';

//take the file
$pokerHands = fopen('smallPoker.txt', 'r') or die("Unable to open file!");
$player1WinCount = 0;
// echo fread($pokerHands, filesize('poker.txt'));

if($pokerHands) {
    while(($line = fgets($pokerHands)) !== false){
        // echo $line;
        $arrayNow = explode(" ", $line);
        // print_r($arrayNow);
        //make a player 1 array
        $player1Hand = array_slice($arrayNow, 0, 5);
        // echo '$player1Hand is: ';
        // print_r($player1Hand);
        // echo "\n";


        $player2Hand = array_slice($arrayNow, 5, 5);
        // echo '$player2Hand is: ';
        // print_r($player2Hand);
        // echo "\n";

        // echo pokerWinner($player1Hand);
        // echo "\n";

        $player1HandValue = pokerWinner($player1Hand);
        echo '$player1HandValue is: ' . $player1HandValue . "\n";

        $player2HandValue = pokerWinner($player2Hand);
        echo '$player2HandValue is: ' . $player2HandValue . "\n";

        echo "\n";

        if($player1HandValue > $player2HandValue){
            $player1WinCount++;
        }
        
        echo '$player1WinCount is now: ' . $player1WinCount . "\n";

    }
  

}

//now determine the high card. 
//now take the cards that are not in the set













fclose($pokerHands);
//spit it out.