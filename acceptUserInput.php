<?php
//receive user input
//add to tic tac toe board

$board =  [[0, 0, 0],
            [0, 0, 0],
            [0, 0, 0]];

$i = 0;
$j = 0;
$board[$i][$j] = 1;

echo "The board: \n";
for($i=0; $i<count($board); $i++){
    for($j=0; $j<count($board[$i]); $j++){
        echo $board[$i][$j] . " ";
    }

    echo "\n";

}

// $userInput = "0,0";
$userInput = readline("Type something here: ");

//check for valid input
if(1===1){
    
    $userInput = explode(",", $userInput);
    echo "you typed: ";
    print_r($userInput);

    $i = $userInput[0];
    $j = $userInput[1];


}


//break apart the userInput
//first one is assigned to $i
//second one is assigned to $j
//$board[$i][$j] = 1;


