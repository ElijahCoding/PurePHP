<?php

namespace Elijah\Jokes;

class JokeFactory
{
    protected $jokes = [
        'Mama joke',
        'Daddy joke'
    ];

    public function __construct(array $jokes = null)
    {
        if ($jokes) {
            $this->jokes = $jokes;
        }
    }

    public function getRandomJoke()
    {
        return $this->jokes[array_rand($this->jokes)];
    }
}
