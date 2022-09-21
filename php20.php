<?php

function reviewIfAnagram($word1, $word2)
{
    $word1Array = str_split($word1);
    $word2Array = str_split($word2);

    sort($word1Array);
    sort($word2Array);

    if (count($word1Array) != count($word2Array)) exit("$word1 is not an anagram of $word2 by the lenght");

    for ($i = 0; $i < count($word1Array); $i++) {
        if ($word1Array[$i] != $word2Array[$i]) exit("$word1 is not an anagram of $word2");
    }

    exit("$word1 is an anagram of $word2");
}

reviewIfAnagram("amores", "roma");

/* Review if two strings are an anagram */