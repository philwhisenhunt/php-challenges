<?php
function anagramcheck($userword1, $userword2) {


//convert letters to uppercase
  $userword1 = strtoupper($userword1);
  $userword2 = strtoupper($userword2);

//convert letters to lowercase
  $userword1 = strtolower($userword1);
  $userword2 = strtolower($userword2);

  //split into an array
  $wordarray1 = str_split($userword1);
  $wordarray2 = str_split($userword2);

  // echo json_encode($wordarray1);
  //   echo json_encode($wordarray2);


  //sort both arrays
  sort($wordarray1);
  sort($wordarray2);

//compare the two arrays
  if($wordarray1 == $wordarray2){
    echo 'true';
  }
  else{
    echo 'false';
  }

}

//run the function
anagramcheck('cristian', 'Cristina');


//pseudo code
//take word
//split into array
//put each array in alphabetical order
//compare the two
?>