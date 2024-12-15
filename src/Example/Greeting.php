<?php

namespace Example;

class Greeting
{
    public function __construct(private string $name = 'Stranger')
    {
    }

    public function sayHello(): string
    {
        return 'Hello ' . $this->name;
    }
}
