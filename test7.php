<?php

function printing($name = 'Cesar'){
    print($name);
}

function job(callable $function, $time){
    sleep($time);
    $function();
}

job('printing', 5);

