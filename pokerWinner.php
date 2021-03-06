<?php

require 'straightFinder.php';
require 'flushFinder.php';
require 'royalFlushFinder.php';
require 'pairFinder.php';
require 'cardValueMaker.php';
require 'twoPairFinder.php';

function pokerWinner($player1Hand){


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
    $value = 10;

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


    }

    //check for flush
    if(flushFinder($player1Hand)){
        $flushCount = 1;

    }

    //check for straight flush
    if($flushCount == 1 && $straightCount == 1){
        $straightFlushCount = 1;
    }

    //check for royal flush
    if($straightFlushCount == 1){
        if(royalFlushFinder($player1Hand)){
            $royalFlushCount = 1;
        }
    }

    //Testing area

    // echo 'The $pairCount is: ' . $pairCount . "\n" . "\n";
    // echo 'The $twoPairCount is: ' . $twoPairCount . "\n" . "\n";
    // echo 'The $threeOfAKind is: ' . $threeOfAKind . "\n" . "\n";
    // echo 'The $fourOfAKindCount is: ' . $fourOfAKindCount . "\n" . "\n";
    // echo 'The $straightCount is: ' . $straightCount . "\n" . "\n";
    // echo 'The $flushCount is: ' . $flushCount . "\n" . "\n";
    // echo 'The $fullHouseCount is: ' . $fullHouseCount . "\n" . "\n";
    // echo 'The $fourOfAKindCount is: ' . $fourOfAKindCount . "\n" . "\n";
    // echo 'The $straightFlushCount is: ' . $straightFlushCount . "\n" . "\n";
    // echo 'The $royalFlushCount is: ' . $royalFlushCount . "\n" . "\n";


    //Give out points
    if($royalFlushCount == 1){
        $value = 10;
        return $value;
    }

    if($straightFlushCount == 1){
        $value = 9;
        return $value;
    }

    if($fourOfAKindCount == 1){
        $value = 8;
        return $value;
    }

    if($fullHouseCount == 1){
        $value = 7;
        return $value;
    }

    if($flushCount == 1){
        $value = 6;
        return $value;
    }

    if($straightCount == 1){
        $value = 5;
        return $value;
    }

    if($threeOfAKind == 1){
        $value = 4;
        return $value;
    }

    if($twoPairCount == 1){
        $value = 3;
        return $value;
    }

    if($pairCount == 1){
        $value = 2;
        return $value;
    }

    else{
        $value = 1;
        return $value;
    }


}