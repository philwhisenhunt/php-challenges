<?php

$s = "test this out";
function accum($s) {
   // your code
   //convert string to array
   $arrayfroms = explode($s, "");
   echo $arrayfroms;

   //for each part of the array, make it say itself, plus itself * the number in the array
   $finalform = "";
   for ($i=0; $i<=count($arrayfroms); $i++){
     $finalform = $finalform . strtoupper($arrayfroms[$i]) . str_repeat($arrayfroms[$i], $i);
     echo $finalform;
   }
   return $finalform;
   echo $finalform;
} 
accum($s);
?>