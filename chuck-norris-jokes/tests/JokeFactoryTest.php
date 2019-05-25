<?php

namespace Elijah\Jokes\Tests;

use PHPUnit\Framework\TestCase;
use Elijah\Jokes\JokeFactory;

class JokeFactoryTest extends TestCase
{
    /** @test */
    public function it_returns_a_random_joke()
    {
        $data = 'This is a joke';

        $jokes = new JokeFactory([
            $data
        ]);

        $joke = $jokes->getRandomJoke();

        $this->assertSame($data, $joke);
    }

    /** @test */
    public function it_returns_a_predefined_joke()
    {
        
    }
}
