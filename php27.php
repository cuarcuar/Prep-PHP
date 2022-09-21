<?php

function generateTimeData($number)
{
    $years = 0;
    $months = 0;
    $days = 0;
    $aux = 0;

    if ($number < 30) {
        $days = $number;
    }

    if ($number < 365 && $number >= 30) {
        $months = floor($number / 30);
        if (!is_int($number / 30)) $days = $number -  $months * 30;
    }

    if ($number >= 365) {
        $years = floor($number / 365);
        if (!is_int($number / 365)) {
            $aux = $number - $years * 365;
            $months = floor($aux / 30);
            if (!is_int($aux / 30)) $days = $aux - $months * 30;
        }
    }

    echo ("Years = $years\n");
    echo ("Months = $months\n");
    echo ("Days = $days\n");
    echo ("End\n");
}

function generateTimeData2($number){
    $years = is_int($number/365) ? $number/365 : floor($number/365);
    $months = is_int(($number%365)/30) ? ($number%365)/30 : floor(($number%365)/30);
    $days = is_int(($number%365)%30) ? ($number%365)%30 : floor(($number%365)%30);
    
    echo ("Years = $years\n");
    echo ("Months = $months\n");
    echo ("Days = $days\n");
    echo ("End\n");
}


generateTimeData2(15);
generateTimeData2(40);
generateTimeData2(120);
generateTimeData2(167);
generateTimeData2(400);
generateTimeData2(920);

/* Generate how many years, months and days are by the given number */