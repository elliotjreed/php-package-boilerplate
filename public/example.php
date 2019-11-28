<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use Example\Greeting;

$greeting = new Greeting('Ada Lovelace');

echo $greeting->sayHello();
