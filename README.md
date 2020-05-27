# PHP "Hello World" Environment

A basic setup for PHP code execution. Can be used as a code sandbox, a local platform for solving competitive programming challenges, or a setup for a coding interview.

## Local Setup

This setup uses [Composer](https://getcomposer.org/doc/00-intro.md). Make sure that you have that installed properly. Once you have Composer, install the packages, and you're good to go.

```bash
git clone https://github.com/EvgeniiKlepilin/php-hello-world-environment.git
cd php-hello-world-environment
composer install
```

## Usage

You can use this setup in one of two ways: execute the code to have it output in the console OR setup test cases and run them.

- In order to execute the code for the console, run `php src/index.php`
- In order to run test cases, run: `.vendor/bin/phpunit tests`