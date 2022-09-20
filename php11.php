<?php

function censurateText($sentence, $censoredWord)
{
    $cleanSentence = str_replace([",", ".", "?"], " ", strtolower($sentence));
    exit(str_replace($censoredWord, "*****", $cleanSentence));
}

censurateText("Hola buenos dias como estan? los dias estan bien, DIAS DIAS,", "dias");

/* Censurate the given text by some new chain */