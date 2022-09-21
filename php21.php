<?php

function splitText($word, $newLength)
{
    print_r(substr($word, 0, $newLength));
}

splitText("hola", 2);

/* Split the given word, by the new given lenght */