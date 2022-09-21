<?php

function calculateGradeName($number)
{
    switch ($number) {
        case $number < 90:
            exit("Agudo");
            break;
        case $number == 90:
            exit("Recto");
            break;
        case $number > 90 && $number < 180:
            exit("Obtuso");
            break;
        case $number == 180:
            exit("Llano");
            break;
        case $number > 180 && $number < 360:
            exit("Concavo");
            break;
        case $number == 360:
            exit("Completo");
            break;
    }
}

calculateGradeName(110);

/* Calculate the name of the given angle */