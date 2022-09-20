<?php

function oddCounter($begginingNumber, $endingNumber)
{
    $odds = 0;
    for ($i = $begginingNumber; $i <= $endingNumber; $i++) {
        if ($i % 2) $odds = $odds + 1;
    }

    exit("The total of odd numbers on the range from $begginingNumber to $endingNumber is = $odds");
}

oddCounter(1, 5);

/* Given an array between n to n numbers throw how many of that range is an odd number */