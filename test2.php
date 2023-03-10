<?php

function generateProducts($list){
    
    $aux = 1; 
    $newList = [];

    for ($i=0; $i < count($list); $i++) { 
        for ($j=0; $j < count($list); $j++) { 
            if($i != $j){
                $aux *= $list[$j];
            } 
        }
        array_push($newList, $aux);
        $aux = 1;
    }

    return $newList;

}

$list = [1,2,3,4,5];
$list2 = [3,2,1];

print_r(generateProducts($list2));