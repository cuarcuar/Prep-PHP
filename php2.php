<?php

function reviewPalindrom($word)
{
    $wordlenght = strlen($word) - 1;

    for ($i = 0; $i <= $wordlenght; $i++) {
        if ($word[$i] != $word[$wordlenght - $i]) exit("$word is not a palindrom \n");
    }

    exit ("$word is a palindrom \n");
}

function reviewPalindrom2($word)
{
    $reversedWord = strrev($word);
    $word == $reversedWord ? exit("$word is a plaindrom \n") : exit("$word is not a palindrom \n");
}

reviewPalindrom2('otto');

/* View if the word is a palindrom (when is the same word readed backwards as well) */