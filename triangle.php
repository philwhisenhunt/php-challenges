<?php

/* 
The nth term of the sequence of triangle numbers is given by, tn = ½n(n+1); so the first ten triangle numbers are:

1, 3, 6, 10, 15, 21, 28, 36, 45, 55, ...

By converting each letter in a word to a number corresponding to its alphabetical position and adding these values we form a word value. 

For example, the word value for SKY is 19 + 11 + 25 = 55 = t10. If the word value is a triangle number then we shall call the word a triangle word.

Using words.txt, a 16K text file containing nearly two-thousand common English words, how many are triangle words?


*/

/*
Make an array with each letter corresponding to a number (use the formula)
break each word into an array
foreach letter, add that value to the array 
total = sum each letter's value 

Then take the text file
for each word, apply it to the function above. 


Import File
Cycle through each word
for each $wordList as $word {
    break into array
    for each piece of the array{
        if that letter is in the key value pair, $wordTotal = $wordTotal + value
    }

    if ($wordTotal <= 26 && $wordTotal > 0){
        echo "$word is a triangle word and has a value of $wordTotal"
        $totalTriangleWords += 1;   
    }
}


*/

$wordFile = fopen('smallerwords.txt', 'r');
// echo fread($wordFile, filesize('smallerwords.txt'));

//write a function to make the array
$letterValues = ['A'=>1,
                
                 
                
                
                ];

$nowOneString = fgets($wordFile);
$withoutQuotes = str_replace('"', "", $nowOneString);

$nowArray = preg_split("/\,/", $withoutQuotes);

foreach($nowArray as $word){
    $nowLetterArray = str_split($word);
    // print_r($nowLetterArray);

    foreach($nowLetterArray as $letter){
        if ($letter == 'A' || $letter == 'B'){

        $value = $letterValues[$letter];
        echo $value;
    }
}

}
// print_r($nowArray);


// echo fgets($wordFile);
fclose($wordFile);

echo "\n ";