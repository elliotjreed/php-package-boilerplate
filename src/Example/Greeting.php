<?php

declare(strict_types=1);

namespace Example;

class Greeting
{
    private string $name;

    public function __construct(string $name = 'Stranger')
    {
        $this->name = $name;
    }

    public function sayHello(): string
    {
        return 'Hello ' . $this->name;
    }
}
