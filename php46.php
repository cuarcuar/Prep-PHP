<?php

class User
{
    public $name;
    public $hobbies;
}

function countBestHobbies($usersArray)
{
    $hobbiesArray = [];
    foreach ($usersArray as $user) {
        foreach ($user->hobbies as $hobbie) {
            array_key_exists($hobbie, $hobbiesArray) ? $hobbiesArray[$hobbie] += 1 : $hobbiesArray[$hobbie] = 1;
        }
    }

    print_r($hobbiesArray);
}

$user1 = new User();
$user1->name = "Cesar";
$user1->hobbies = ["Code", "Travel", "Basket", "Videogames"];

$user2 = new User();
$user2->name = "Alan";
$user2->hobbies = ["Code", "Travel", "Basket"];

$user3 = new User();
$user3->name = "Laura";
$user3->hobbies = ["Code", "Basket", "Videogames"];

$user4 = new User();
$user4->name = "Martha";
$user4->hobbies = ["Code", "Concerts", "Videogames"];

countBestHobbies([$user1, $user2, $user3, $user4]);

/* Return how many students had the same hobbie with the given students array */