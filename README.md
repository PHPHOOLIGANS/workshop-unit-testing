# 🏫 PhpHooligans Workshop - Unit-Testing - The Basics 🎓

## Introduction

This workshop is a first introductory course to *isolated automated checks*
(also known as unit-testing). It is geared towards explaining how to create and
run automated checks on a PHP code-base with PhpUnit.

After a short theoretical introduction, participants will gain the knowledge and
ability to create unit-tests, and run them on a local or remote environment
(such as build/CI server).

## Overview

The workshop is structured as follows:

### Preparation:

- Make sure PHP + Xdebug is installed and correctly configured
- Open the [PhpUnit manual](https://phpunit.de/manual/current/en/)

### Theory

A brief introduction on what automated checks are and how they work

1. What is an automated check?
2. What is an automated check *not*? (i.e. exploratory)
3. How do automated checks work?
4. Various benefits
5. A word on xUnit
6. Testing old Code vs. Checking new Code

### Practice

1. Installing PHPUnit
    - Globally
    - Per project
    - Using different versions (using phpunit.phar)
2. Pick a project to use for testing (or use the WordWrapper example from [`PHPHOOLIGANS/workshop-unit-testing`](https://github.com/PHPHOOLIGANS/workshop-unit-testing))
3. Basic Configuration
    - Commandline options
        - `--configuration`
    - Local configuration file (phpunit.xml)
        -- `<testsuites>`
    - Project configuration file (`phpunit.xml.dist`)
4. Where do the tests go? (Directory structure, Namespaces and Autoloading)
5. Creating an empty automated check
    - Pick (or create) a class to test
    - Creating a Test class
    - Creating an automated check
6. Running automated checks
7. Creating an actual automated check
8. Using Asserts to validate assumptions

## Follow-up Intermediate workshops

Once the basics are under control, developers might want to learn more features
that PHPUnit offers. There is a workshop aimed at intermediate knowledge.

1. Configuring the IDE or text-editor. Supported options are:
    a. PhpStorm
    b. Atom
    c. Vim
    d. Sublime
    e. Other editor (an external tools is used)
2. Providing data to tests using DataProviders
3. Using test doubles
4. Setting up test dependencies
5. More configuration
    - Strictness
        - `forceCoversAnnotation="true"`
    - `<logging>`
        - TestDox
        - Coverage Text
        - Coverage Clover XML
    - `<filter>`
6. Code Coverage
    - Adding annotation `@coversDefaultClass` and `@covers`


## Follow-up Advanced workshops

There more advanced or topic-specific workshops beyond the knowledge the
intermediate workshop offers:

- Acceptance Tests with Selenium and the [php-webdriver](https://github.com/facebook/php-webdriver)
- Generating Test Data with [QuickCheck](https://github.com/steos/php-quickcheck)
- Test Mutation with [Humbug](https://github.com/padraic/humbug)
- Mocking build-in or legacy functionality with [php-mock](https://github.com/php-mock/php-mock)
- Working with other Mock libraries such as [Mockery](https://github.com/padraic/mockery) or [Phony](https://github.com/eloquent/phony)
- Writing tests using PHP's native [PHPT](https://qa.php.net/write-test.php)
- Speeding up deploy with [phpunit-clever-and-smart](https://github.com/lstrojny/phpunit-clever-and-smart)

/*EOF*/