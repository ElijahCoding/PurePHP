<?php

use Elijah\Jokes\JokeFactory;

Route::get('/', function () {
    $jokes = new JokeFactory();

    dd($jokes->getRandomJoke());
});
