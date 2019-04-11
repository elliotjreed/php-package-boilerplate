<?php
declare(strict_types=1);

namespace Tests\Example;

use PHPUnit\Framework\TestCase;
use Example\Greeting;
use DateTime;

class GreetingTest extends TestCase
{
    public function testItGreetsUser(): void
    {
        $dateTime = new DateTime();

        $greeting = new Greeting($dateTime, 'Rasmus Lerdorf');

        $expectedResultContainsPartialGreeting = 'Good';
        $expectedResultContainsName = 'Rasmus Lerdorf';
        $actualResult = $greeting->sayHello();

        $this->assertStringContainsString($expectedResultContainsPartialGreeting, $actualResult);
        $this->assertStringContainsString($expectedResultContainsName, $actualResult);
    }

    public function testItGreetsUserInTheMorning(): void
    {
        $dateTime = $this->createMock(DateTime::class);

        $dateTime->method('format')
            ->willReturn(9);

        $greeting = new Greeting($dateTime, 'Grace Hopper');

        $expectedResult = 'Good Morning Grace Hopper';
        $actualResult = $greeting->sayHello();

        $this->assertEquals($expectedResult, $actualResult);
    }

    public function testItGreetsUserInTheAfternoon(): void
    {
        $dateTime = $this->createMock(DateTime::class);

        $dateTime->method('format')
            ->willReturn(12);

        $greeting = new Greeting($dateTime, 'Alan Turing');

        $expectedResult = 'Good Afternoon Alan Turing';
        $actualResult = $greeting->sayHello();

        $this->assertEquals($expectedResult, $actualResult);
    }
}
