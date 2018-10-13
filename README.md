[![FOSSA Status](https://app.fossa.io/api/projects/git%2Bgithub.com%2Felliotjreed%2Fphp-package-boilerplate.svg?type=shield)](https://app.fossa.io/projects/git%2Bgithub.com%2Felliotjreed%2Fphp-package-boilerplate?ref=badge_shield)

# Vanilla PHP Project

This repository shows a basic setup for a PHP package or application in PHP.


## Getting Started

PHP 7 or above and Composer is expected to be installed on our system.


### Installing Composer

For instructions on how to install Composer visit [getcomposer.org](https://getcomposer.org/download/).

### Installing

After cloning this repository, change into the newly created directory and run

```
composer install
```

or if you have installed Composer locally

```
php composer.phar install
```

This will install all dependencies needed for the project.


## Running the Tests

All tests can be run by executing

```
vendor/bin/phpunit
```

`phpunit` will automatically find all tests inside the `test` directory and run them based on the configuration in the `phpunit.xml` file.


### Testing Approach

The first test for the class `Greeting` verifies that the return value of the `sayHello` method contains the name of the person and also contains the initial greeting &ldquo;Good&rdquo;.

The second and third tests uses stubs to override the default behaviour of the `DateTime` class injected into the class' constructor so that we can test the expected return value depending on the time of day.


## Running the Application

PHP has an in-built server for local development. To run this change into the directory `public` and run

```
php -S localhost:8000
```

Then open your browser at `http://localhost:8000/example.php`

You should see the text &ldquo;Good Morning Ada Lovelace&rdquo; being printed (or similar depending on the time of day).


## Built With

- [PHP](https://secure.php.net/)
- [Composer](https://getcomposer.org/)
- [PHPUnit](https://phpunit.de/)


## License

This project is licensed under the MIT License - see the [LICENCE.md](LICENCE.md) file for details.
