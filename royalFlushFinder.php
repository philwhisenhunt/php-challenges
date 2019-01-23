<?php

function royalFlushFinder($player1Hand){
    $positionValues = cardValueMaker($player1Hand);

    //sort position values
    sort($positionValues);

    if($positionValues[0] == 10){
        return true;
    }

    echo "alsdfjasdl;kfjadksfal;skdjfal;sdkjfal;skdjfl;aksdj;l";

}