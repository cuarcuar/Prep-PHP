<?php

function dictionary($list, $string){

    $results = [];

    for ($i=0; $i < strlen($string); $i++) { 
        foreach ($list as $word) {
            if(substr($string, $i, strlen($word)) == $word) array_push($results, $word);
        }
    }

    return $results == [] ? null : $results;

}

$list = ['quick', 'brown', 'the', 'fox'];
$string = "thequickbrownfox";

print_r($list);
print_r($string . "\n");

print_r(dictionary($list, $string));

