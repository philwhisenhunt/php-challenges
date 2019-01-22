<?php
$number = 9;
$str = "Beijing";
$txt = sprintf("There are %u million bicycles in %s.",$number,$str);
echo $txt;
echo "\n";


$number = 10;
$str = "Shanghai";
$txt = sprintf("There are %u million bicycles in %s.", $number, $str);
echo $txt;
echo "\n";


$piece = "  ---";

$blankGameBoard = 
        [
        ["  0 ", "   1 ", "   2 "],
        ["  ---", $piece, "  ---"], 
 ["0 ", "|", "   |", "   |", "   |"], 
         ["  ---", "  ---", "  ---"], 
  ["1 ", "|","   |", "   |", "   |"], 
        ["  ---", "  ---", "  ---"], 
  ["2 ", "|","   |", "   |", "   |"],
        ["  ---", "  ---", "  ---"]
        ];

$result =  sprintf($blankGameBoard, $number, $str);
print_r($result);
echo "\n";

//for each thing in the numbered array,
//if 0 show a blank piece
// if 1 show a X piece
// if 2 show a O piece