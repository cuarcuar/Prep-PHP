<?php

function makingCapitalFirstLetter($sentence)
{
    $sentenceArray = explode(" ", $sentence);
    $sentence = "";
    foreach ($sentenceArray as $word) {
        for ($i = 0; $i < strlen($word); $i++) {
            $i == 0 ? $sentence = $sentence . strtoupper($word[$i]) : $sentence = $sentence . $word[$i];
            if ($i == strlen($word) - 1) $sentence = $sentence . " ";
        }
    }
    exit("$sentence\n");
}

makingCapitalFirstLetter("hola como estas?");

/* From the given sentence, make Capital letter the first letter of all the words on the sentence */