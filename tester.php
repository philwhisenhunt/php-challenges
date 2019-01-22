<?php

require 'determineWinner.php';

$board =   [[0, 0, 1],
            [0, 1, 0],
            [1, 0, 0]];

echo determineWinner($board) . "\n";

