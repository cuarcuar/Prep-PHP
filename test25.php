<?php

function bestProfit($prices){

    $min = array_search(min($prices), $prices);
    $prices = array_splice($prices, $min, count($prices));

    $auxSell = 0;

    for ($i=0; $i < count($prices); $i++) { 
        if($auxSell < $prices[$i]) $auxSell = $prices[$i];
    }

    return $auxSell - min($prices);
}

print_r(bestProfit([4,2,5,98,3,200]));
