<?php

/* 
The nth term of the sequence of triangle numbers is given by, tn = ½n(n+1); so the first ten triangle numbers are:

1, 3, 6, 10, 15, 21, 28, 36, 45, 55, ...

By converting each letter in a word to a number corresponding to its alphabetical position and adding these values we form a word value. 

For example, the word value for SKY is 19 + 11 + 25 = 55 = t10. If the word value is a triangle number then we shall call the word a triangle word.

Using words.txt, a 16K text file containing nearly two-thousand common English words, how many are triangle words?

*/

/*
Planning:
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

$wordFile = fopen('words.txt', 'r');

$letterValues = ['A'=>1,
                 'B'=>3,
                 'C'=>6,
                 'D'=>10,
                 'E'=>15,
                 'F'=>21,
                 'G'=>28,
                 'H'=>36,
                 'I'=>45,
                 'J'=>55,
                 'K'=>66,
                 'L'=>78,
                 'M'=>91,
                 'N'=>105,
                 'O'=>120,
                 'P'=>136,
                 'Q'=>153,
                 'R'=>171,
                 'S'=>190,
                 'T'=>210,
                 'U'=>231,
                 'V'=>253,
                 'W'=>276,
                 'X'=>300,
                 'Y'=>325,
                 'Z'=>351,
        
                ];
$nowOneString = fgets($wordFile);
$withoutQuotes = str_replace('"', "", $nowOneString);

$nowArray = preg_split("/\,/", $withoutQuotes);
// echo count($nowArray);
// die();

$totalTriangleWordCount = 0;

foreach($nowArray as $word){
    $totalValue = 0;

    $nowLetterArray = str_split($word);

    foreach($nowLetterArray as $letter){
        $findIndex = $letterValues[$letter];
        // echo $findIndex;
        $totalValue = $totalValue + $findIndex;
        // echo $totalValue;
    }  
// echo $totalValue;
// echo "\n";
    if(isset($letterValues[$totalValue])){
        $totalTriangleWordCount += 1;   
        // echo $totalTriangleWordCount;
    }
}
// die();

fclose($wordFile);

echo "The final total number of Triangle Words is now: " . $totalValue;
echo "\n ";

