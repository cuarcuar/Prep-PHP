<?php

function mostRepetitive($sentence)
{
    $cleanSentence = str_replace([",", ".", "?"], "", strtolower($sentence));
    $sentenceArray = explode(" ", $cleanSentence);
    $sentenceArray = array_count_values($sentenceArray);
    print_r("The most repetitive value on the sentence is " . array_search(max($sentenceArray), $sentenceArray) . " with " . max($sentenceArray) . " times\n");
    print_r($sentenceArray);
}

mostRepetitive("hola como estas? si tu? como estas, hola muy bien gracias, bueno, hola, hola hola");

/* return the most repetitive word on a sentence */