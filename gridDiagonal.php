<?php
//
function diagonalFinder($input){
    // echo $input[0][0];
    // echo "\n";

    // echo $input[1][4];
    // echo "\n";

    

    //for each number here, we need to test in five directions
    //but in order to get each number, we need to be able to loop through.
    $currentGreatestTotal = 0;
        for($i=0; $i<count($input); $i++){
            for($j=0; $j<count($input[$i]); $j++){
                //now getting the output on thing at a time.
                // echo $input[$i][$j];
                // echo "\n";

                //check the sum of the four to the right
                //if greater than current sum, then reassign new sum
                
                //first check if $input[$i][$j + 3] exists
                if(! empty($input[$i][$j + 3])){
                    // echo "This worked \n";
                    // die();
                    $currentTotalRight = $input[$i][$j] + $input[$i][$j + 1 ] + $input[$i][$j + 2 ] + $input[$i][$j + 3 ];
                        echo "TotalRIGHT: " . $currentTotalRight . "\n";
                        echo "TOTAL EVER: " . $currentGreatestTotal . "\n";
                        if($currentTotalRight > $currentGreatestTotal){
                            echo "It is greater \n";
                            $currentGreatestTotal = $currentTotalRight;
                        }
                       
                }

               
            

            }


        }
        echo "The new biggest total is ". $currentGreatestTotal . "\n";
    }









$testGrid = [
    [40, 17, 81, 18, 57],
    [74, 4, 36, 16, 29],
    [36, 42, 69, 73, 45],
    [51, 54, 69, 16, 92],
    [7, 97, 57, 32, 16]
  ];

  echo diagonalFinder($testGrid);
