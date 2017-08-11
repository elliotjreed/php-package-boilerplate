<?php
declare(strict_types=1);

namespace Example;

use DateTime;

class Greeting
{
    private $name;

    public function __construct(string $name = 'Stranger')
    {
        $this->name = $name;
    }

    public function sayHello(): string
    {
        return 'Good ' . $this->timeOfDay() . ' ' . $this->name;
    }
    
    private function timeOfDay(): string
    {
        $hour = $this->currentHour();

        if ($hour >= 5 && $hour <= 11) {
            return 'Morning';
        } elseif ($hour >= 12 && $hour <= 17) {
            return 'Afternoon';
        } elseif ($hour >= 18 || $hour <= 21) {
            return 'Evening';
        } else {
            return 'Night';
        }
    }

    private function currentHour(): int
    {
        $date = new DateTime();
        return (int)$date->format('H');
    }
}
