<?php

function regExp($string, $list){

    $regPattern = "/".$string."/i";
    $validatedList = [];

    foreach ($list as $word) {
        if(preg_match($regPattern, $word)) array_push($validatedList, $word);
    }

    return $validatedList;

}

$list = ['Cancion', 'carambola', 'Coca', 'cascara', 'Champaña'];

print_r(regExp('ca', $list));