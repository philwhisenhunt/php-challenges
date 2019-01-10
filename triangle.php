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
                'B'=>2,
                'C'=>3,
                'D'=>4,
                'E'=>5,
                'F'=>6,
                'G'=>7,
                'H'=>8,
                'I'=>9,
                'J'=>10,
                'K'=>11,
                'L'=>12,
                'M'=>13,
                'N'=>14,
                'O'=>15,
                'P'=>16,
                'Q'=>17,
                'R'=>18,
                'S'=>19,
                'T'=>20,
                'U'=>21,
                'V'=>22,
                'W'=>23,
                'X'=>24,
                'Y'=>25,
                'Z'=>26,
    
            ];

            $totalTriangleWordCount = 0;

function isThisTriangle($totalValue){
    if($totalValue == 1){
        global $totalTriangleWordCount;
        return $totalTriangleWordCount += 1;
         
    }
        for($n=0; $n<$totalValue; $n++){
        //   echo gettype($totalValue);
            // echo gettype($n);
            // echo gettype((.5 * $n)*($n +1 ));

            if($totalValue == ((.5 * $n)*($n +1 ))){
                // echo "it works";
                global $totalTriangleWordCount;
                return $totalTriangleWordCount += 1;  
                 
                }   
                else {
                    // echo "didn't work \n";


                }
        }   
}
            
$nowOneString = fgets($wordFile);
$withoutQuotes = str_replace('"', "", $nowOneString);

$nowArray = preg_split("/\,/", $withoutQuotes);



foreach($nowArray as $word){
    $totalValue = 0;

    $nowLetterArray = str_split($word);

    foreach($nowLetterArray as $letter){
        $findIndex = $letterValues[$letter];
        // echo $findIndex;
        $totalValue = $totalValue + $findIndex;

        // echo $totalValue;
        // echo "\n";
    }  
     isThisTriangle($totalValue);
    
    // echo $totalValue;
    // echo "\n";

}


// isThisTriangle(55, $totalTriangleWordCount);

fclose($wordFile);

echo "The final total number of Triangle Words is now: " . $totalTriangleWordCount;
echo "\n ";

