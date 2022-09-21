<?php

function reviewEmail($email)
{
    $regex = "/[a-z0-9]+@+[a-z]+.com/";
    print_r(preg_match($regex, $email) ? "$email is valid email" : "$email is not valid email\n");
}

reviewEmail("cuar@mail.com");

/* review if the given email is valid or not */