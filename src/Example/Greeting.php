<?php
declare(strict_types=1);

namespace Example;

use DateTime;

class Greeting
{
    private $name;

    public function __construct(DateTime $dateTime, string $name = 'Stranger')
    {
        $this->name = $name;
        $this->hour = $dateTime->format('H');
    }

    public function sayHello(): string
    {
        return 'Good ' . $this->timeAsWordFromHour() . ' ' . $this->name;
    }

    private function timeAsWordFromHour(): string
    {
        if ($this->hour >= 5 && $this->hour <= 11) {
            return 'Morning';
        } elseif ($this->hour >= 12 && $this->hour <= 17) {
            return 'Afternoon';
        } elseif ($this->hour >= 18 || $this->hour <= 21) {
            return 'Evening';
        } else {
            return 'Night';
        }
    }
}
