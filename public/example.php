<?php
declare(strict_types=1);
require __DIR__ . '/../vendor/autoload.php';

use Example\Greeting;

$currentDateTime = new DateTime();
$name = 'Ada Lovelace';

$greeting = new Greeting($currentDateTime, $name);

echo $greeting->sayHello();
