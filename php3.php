<?php

function countCoincidences($word, $sentence)
{
    $count = 0;
    $sentenceArray = explode(" ", $sentence);
    for ($i = 0; $i < count($sentenceArray); $i++) {
        if ($sentenceArray[$i] == $word) $count = $count + 1;
    }

    exit("The word $word it was founded in \" $sentence \" $count times \n");
}

function countCoincidences2($word, $sentence)
{
    exit("The word $word it was founded in \" $sentence \" " . substr_count($sentence, $word) . " times \n");
}



countCoincidences("hola", "hola como hola estas? hola");

/* how much coincidences does a word appears on a sentence */