<?php

function generatePercentage($percentage, $number){
    exit("The $percentage of $number is = " . ($percentage * $number) / 100 . "\n");
}

generatePercentage(25, 50);