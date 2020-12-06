# PHP Package Boilerplate / Example Project

This repository shows a basic setup for a PHP package or application in PHP.

## PHP Versions

This version will work on PHP version 8.0 and above.

For a version which is compatible with PHP 7.4 and above select the 7.4 Git tag ([github.com/elliotjreed/php-package-boilerplate/tree/7.4](https://github.com/elliotjreed/php-package-boilerplate/tree/7.4)).

## Getting Started

PHP 8.0 or above and Composer is expected to be installed on our system.

### Installing Composer

For instructions on how to install Composer visit [getcomposer.org](https://getcomposer.org/download/).

### Installing

After cloning this repository, change into the newly created directory and run

```bash
composer install
```

or if you have installed Composer locally in your current directory

```bash
php composer.phar install
```

This will install all dependencies needed for the project.

## Running the Tests

All tests can be run by executing

```bash
vendor/bin/phpunit
```

`phpunit` will automatically find all tests inside the `test` directory and run them based on the configuration in the `phpunit.xml` file.

### Testing Approach

The test for the class `Greeting` verifies that the return value of the `sayHello` method returns the string "Hello {name}", where {name} is the value passed through to the constructor.

## Running the Application

PHP has an in-built server for local development. This can be started by executing

```
php -S localhost:8000 -t public
```

Then open your browser at `http://localhost:8000/example.php`

You should see the text "Hello Ada Lovelace" on your screen.

## Built With

  - [PHP](https://secure.php.net/)
  - [Composer](https://getcomposer.org/)
  - [PHPUnit](https://phpunit.de/)

## License

This project is licensed under the MIT License - see the [LICENCE.md](LICENCE.md) file for details.
