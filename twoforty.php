<?php
//Write a function that takes in an array
//inside the array are item numbers or another array
//same rules apply to the second array, so things inside that array
//what we want to do is sort the contents of the array based on numerical value smallest to largest
//for the arrays, calculate the same. 

$arr = [3, [4,2], 7, 2, 1,[9,[1,3]],2];

function sorterArray($arr){
    //cycle through first array
    //if not int, then calculate sum (because it will be an array)
    //But how to return the array and not the sum?
    $result =[];

    for($i=0; $i<count($arr); $i++){
        if(is_int($arr[$i])){

         
        }

        else {
            $arr[$i] = sorterArray($arr[$i]);

        }

        if($i == 0){
           array_push($result, $arr[$i]);
        }

        else{
            $placed = false;
            for($j=0; $j<count($result); $j++){
                if(recursiveSum($arr[$i]) < recursiveSum($result[$j])){
                    array_splice($result, $j, 0, array($arr[$i]));
                    $placed = true;
                    break; //once its placed, we don't care to run it anymore 
                }
                
            }
            if(! $placed){
                array_push($result, $arr[$i]);
    
            }
        }

    }
    
//    sort($arr);
   return $result;
}

//We need a second recursive function

function recursiveSum($input){
    //Call it on everything

    if(is_int($input)){
        return $input;
    }

    $runningTotal = 0;
    for($i=0; $i<count($input); $i++){
        $runningTotal += recursiveSum($input[$i]);


    }
    
    return $runningTotal;

}




//should turn into this:

print_r(sorterArray($arr));
//  $result = [1,2,3,[2,4], 7];

//need a recursive function 


   
            //But needs to return the original array. So can't use sort.
            // echo $arr[$i];

            //make a new array

            //if the array_sum($arr[$i] < $array_sum[$i+1])
                //send it to array
            //else
                //send it 