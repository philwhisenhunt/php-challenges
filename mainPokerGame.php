<?php

//take the file
$pokerHands = fopen('poker.txt', 'r') or die("Unable to open file!");
echo fread($pokerHands, filesize('poker.txt'));
fclose($pokerHands);
//spit it out.