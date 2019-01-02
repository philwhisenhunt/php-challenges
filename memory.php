<?php

function nameIt($input){
    $reversed = strrev($input);
    return $reversed;
}

echo nameIt("\n hello");