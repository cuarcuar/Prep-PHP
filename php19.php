<?php

class Movie
{
    public $name;
    public $director;
    public $seenFlag;
}

function watchedMovies($moviesArray)
{
    foreach ($moviesArray as $movie) {
        if ($movie->seenFlag) {
            echo ("Ya viste " . $movie->name . " de " . $movie->director . "\n");
        } else {
            echo ("No has visto " . $movie->name . " de " . $movie->director . "\n");
        }
    }
}

$movie1 = new Movie();
$movie1->name = "Space Jam 2";
$movie1->director = "Lebron James";
$movie1->seenFlag = true;

$movie2 = new Movie();
$movie2->name = "Karate Kid";
$movie2->director = "Señor Miyagi";
$movie2->seenFlag = true;

$movie3 = new Movie();
$movie3->name = "Cobra Kai 6";
$movie3->director = "Cobra Kay";
$movie3->seenFlag = false;

watchedMovies([$movie1, $movie2, $movie3]);

/* From a given objects array return the specified concepts */