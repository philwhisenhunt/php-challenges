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
// print_r($letterValues['A']);

/* Save this for later                
$lettersOfAlphabet = "abcdefghijklmnopqrstuvwxyz";
$lettersOfAlphabet = strtoupper($lettersOfAlphabet);

$arrayOfAlphabet = str_split($lettersOfAlphabet);

print_r($arrayOfAlphabet);

$letterValues2 = [];
for($i=0; $i<26; $i++){
    
    $newVal = .5 * $i * ($i+1); 
    $letterValue2[(arrayOfAlphabet[$i])] = $newVal;
    

    // echo 'Letter ' . $arrayOfAlphabet[$i] . '\'s value is ' . $newVal . "\n ";
    // $letterValues2[] = "\'$arrayOfAlphabet\[$i\] => $newVal";
    // print_r($letterValues2);
    
}
// print_r($letterValue2);

*/

//What if we did both the splitting and the removal at once?


$nowOneString = fgets($wordFile);
$withoutQuotes = str_replace('"', "", $nowOneString);

$nowArray = preg_split("/\,/", $withoutQuotes);
$totalValue = 0;
$totalTriangleWordCount = 0;

foreach($nowArray as $word){
    $nowLetterArray = str_split($word);
  

    foreach($nowLetterArray as $letter){
        $totalValue = $totalValue + $letterValues["'$letter'"];
        return $totalValue;
        

        
}
die();
// return $totalValue;
//if the total value is one of the 26 we need.. then add one to the list
//for loop here?
echo $letterValues[$totalValue];
if($letterValues[$totalValue]){
    $totalTriangleWordCount += 1;
    echo "It was there!";
}
    // for($i=0; $i<26; $i++){
    //     if($totalValue === $letterValues[$i]){
    //         $totalTriangleWordCount += 1;
    //     }
    // }


}
// print_r($nowArray);


// echo fgets($wordFile);
fclose($wordFile);

echo "The final total number of Triangle Words is now: " . $totalTriangleWordCount;
echo "\n ";

