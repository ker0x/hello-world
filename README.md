<div align="center">
    <a href="https://travis-ci.org/ker0x/hello-world" title="Build">
        <img src="https://img.shields.io/travis/ker0x/hello-world.svg?style=for-the-badge" alt="Build">
    </a>
    <a href="https://app.codacy.com/app/monteil-romain/hello-world" title="Coverage">
        <img src="https://img.shields.io/codacy/coverage/d37f24a4d3024d5298f3cc5e277d9ca2.svg?style=for-the-badge" alt="Coverage">
    </a>
    <a href="https://app.codacy.com/app/monteil-romain/hello-world" title="Code Quality">
        <img src="https://img.shields.io/codacy/grade/d37f24a4d3024d5298f3cc5e277d9ca2.svg?style=for-the-badge" alt="Codacy grade">
    </a>
    <a href="https://php.net" title="PHP Version">
        <img src="https://img.shields.io/badge/php-%3E%3D%207.1-8892BF.svg?style=for-the-badge" alt="PHP Version">
    </a>
    <a href="https://packagist.org/packages/kerox/hello-world" title="Downloads">
        <img src="https://img.shields.io/packagist/dt/kerox/hello-world.svg?style=for-the-badge" alt="Downloads">
    </a>
    <a href="https://packagist.org/packages/kerox/hello-world" title="Latest Stable Version">
        <img src="https://img.shields.io/packagist/v/kerox/hello-world.svg?style=for-the-badge" alt="Latest Stable Version">
    </a>
    <a href="https://packagist.org/packages/kerox/hello-world" title="License">
        <img src="https://img.shields.io/packagist/l/kerox/hello-world.svg?style=for-the-badge" alt="License">
    </a>
</div>

# Hello World

A PHP library to say **Hello** to the world

## Installation

To install this library, simply run

```bash
composer require kerox/hello-world
```

## Basic usage

```php
use Kerox\HelloWorld\HelloWorld;

$helloWorld = new HelloWorld;
echo $helloWorld('fr');
```
