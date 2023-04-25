<?php 

function regexPattern($string){

    $regDot = "/boot./i";
    $regMul = "/c.*s/i";

    if(preg_match($regDot, $string)) print_r("true on dot regex \n");
    if(preg_match($regMul, $string)) print_r("true on mull regex \n");

}

regexPattern("carros");