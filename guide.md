---
title: PHP Command Line Application
date: 2017-08-13
tags:
  - command-line
---

PHP is a general-purpose server-side scripting language primarily used in web development. Originally created by Rasmus Lerdorf in 1994, it is now by The PHP Development Team.

PHP originally stood for &ldquo;Personal Home Page&rdquo;, but now stands for &ldquo;PHP: Hypertext Preprocessor&rdquo;.


## Further Material

- Homepage: [php.net](https://secure.php.net/)
- Documentation: [php.net/docs.php](https://secure.php.net/docs.php)
- PHP: The Right Way: [phptherightway.com](http://www.phptherightway.com/)
- Interactive PHP Tutorial: [learn-php.org](http://www.learn-php.org/)


## Topics, Tools and Terms

PHP packages were traditionally installed via PEAR (PHP Extension and Application Repository), but more recently the standard package and dependency management tool is Composer.

Composer lets us run install commands to add packages to our system, for example `composer require phpunit` would add the unit testing framework PHPUnit to our system. 

For instructions on how to install Composer visit [getcomposer.org](https://getcomposer.org/download/).


### Dependency Management

Managing dependencies manually is time-consuming, fortunately Composer can automate this.

We can list our dependencies in a `composer.json` file and run `composer install` to bring these into our project.

An example `composer.json` file looks like this:

{% highlight php %}
{
    "name": "example-project",
    "require": {
        "twig/twig": "^2.4"
    },
    "require-dev": {
        "phpunit/phpunit": "^6.3"
    }
}
{% endhighlight %}
 
The "require" block tells Composer that the Twig templating package is required for production use and can install Twig with a version of 2.x.x (ie. up to, but not including, version 3).

The "require-dev" block tells Composer that PHPUnit is required in development, but not in production.

Dependencies can be added to `composer.json` by

```
composer require author/package-name
```

Development dependencies can be added by

```
composer require author/package-name --dev
```

Dependencies can be updated to their latest maximum version by running

```
composer update
```

Composer will also generate a `composer.lock` file on each `composer update` and the initial `composer install`. This is not meant to be edited directly, it tells Composer to use specific versions of packages - particularly useful when hyhou want your development dependencies to match what you will push to production.

### Testing Tools

There are a number of testing tools available for PHP. The most popular one is [PHPUnit](https://phpunit.de/). PHPUnit follows the classic xUnit approach.

[Behat](http://behat.org/en/latest/) is the most popular behaviour-driven development (BDD) testing framework.

[Codeception](http://codeception.com/) is a framework combining BDD, unit testing, and integration testing, and is cross-compatible with PHPUnit. 

In our guides we will be using PHPUnit as the default testing framework.

## Directory Structure

A typical directory structure for a PHP project consists of a `src` directory that contains all source files and a `tests` directory that includes all tests. For web applications the publically accessible files (eg. `index.php`) would reside in a `public` directory which would then be your webservers document root.

Another common convention is having a `bin` directory that may contain executable files to start your application.

We provided a working example of a minimal project on [Github](provide URL here).
<ul class="directory-structure">
  <li class="directory">src</li>
  <li class="directory">test</li>
  <li class="directory">public</li>
  <li class="file">composer.json</li>
  <li class="file">composer.lock</li>
</ul>


### Naming Conventions

Directory names are in lower case. Class and interface files should be in upper case and match the class or interface names.
Configuration, routes, and publically accessible files should be in lower case.
 
For example the class `Vanilla` should be contained in file `Vanilla.php`, the publically accessible route to the application should be `index.php`.

Tests match their production code file names with a `Test` suffix, e.g. tests for code in `src/Vanilla.php` should be written in `test/VanillaTest.php`.



## Example Project


The repository for the example applications is available at [github.com/vanilla-project/php-module](https://github.com/vanilla-project/php-module).

The main application consists of basically three files:

- `public/example.php` is the main executable that instantiates and runs:
  - `src/Example/Greeting.php` contains the main application.

### Running the Tests

All tests can be run by executing

```
vendor/phpunit/phpunit/phpunit
```

`phpunit` will automatically find all tests inside the `test` directory and run them based on the configuration in the `phpunit.xml` file.


#### Testing Approach

The first test for the class `Greeting` verifies that the return value of the `sayHello` method contains the name of the person and also contains the initial greeting &ldquo;Good&rdquo;.

The second and third tests uses stubs to override the default behaviour of the `DateTime` class injected into the class' constructor so that we can test the expected return value depending on the time of day.


### Running the Application

PHP has an in-built server for local development. To run this change into the directory `public` and run

```
php -S localhost:8000
```

Then open your browser at `http://localhost:8000/example.php`

You should see the text &ldquo;Good Morning Ada Lovelace&rdquo; being printed (or similar depending on the time of day).
