# passwordPackage

## Requirements
* PHP >= 8.2

## Installation

You can add this library as a local, per-project dependency to your project using [Composer](https://getcomposer.org/):

    composer require pyivanov/passwordPackage

If you only need this library during development, for instance to run your project's test suite, then you should add it as a development-time dependency:

    composer require --dev pyivanov/passwordPackage

## Usage

```php
<?php

require __DIR__ . '/../vendor/autoload.php';

$randomGenerator = new \PYIvanov\PasswordPackage\PasswordGenerator();

$length = 8;
$password = $randomGenerator->generate($length);

echo ("Your password is: $password");

```