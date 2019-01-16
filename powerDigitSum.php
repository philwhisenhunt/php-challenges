<?php
//
function powerDigitSum($input){
$newSolution = pow(2, $input);
// echo $newSolution ." is the new solution";
// echo "\n";

$total = 0;

while($newSolution > 0){
    $newSolution = floor($newSolution);
    
    $total = $total + fmod($newSolution, 10);
    $newSolution = $newSolution / 10;
}

//calculate the sum
// $newSolution = array_sum($newSolution);

echo $total;

}


print_r(powerDigitSum(128)); //
echo "\n";
echo "Should be 166";
echo "\n";

//now figure out how to truncate in php. 