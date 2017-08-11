<?php
declare(strict_types=1);

namespace Tests\Example;

use Example\Greeting;
use PHPUnit\Framework\TestCase;

class GreetingTest extends TestCase
{
    public function testItGreetsUserInTheMorning(): void
    {
        $greeting = new Greeting('Grace Hopper');

        $expectedResult = 'Good Morning Grace Hopper';
        $actualResult = $greeting->sayHello();

        $this->assertEquals($expectedResult, $actualResult);
    }

    public function testItGreetsStrangerIfNoNameProvided(): void
    {
        $greeting = new Greeting();

        $expectedResultContainsGreeting = 'Good';
        $expectedResultContainsSubject = 'Stranger';
        $actualResult = $greeting->sayHello();

        $this->assertContains($expectedResultContainsGreeting, $actualResult);
        $this->assertContains($expectedResultContainsSubject, $actualResult);
    }
}
