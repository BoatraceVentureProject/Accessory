# Boatrace Sakura Accessory

[![Build Status](https://github.com/boatrace-sakura/accessory/workflows/tests/badge.svg)](https://github.com/boatrace-sakura/accessory/actions?query=workflow%3Atests)
[![Coverage Status](https://coveralls.io/repos/github/boatrace-sakura/accessory/badge.svg?branch=main)](https://coveralls.io/github/boatrace-sakura/accessory?branch=main)
[![Latest Stable Version](https://poser.pugx.org/boatrace-sakura/accessory/v/stable)](https://packagist.org/packages/boatrace-sakura/accessory)
[![Latest Unstable Version](https://poser.pugx.org/boatrace-sakura/accessory/v/unstable)](https://packagist.org/packages/boatrace-sakura/accessory)
[![License](https://poser.pugx.org/boatrace-sakura/accessory/license)](https://packagist.org/packages/boatrace-sakura/accessory)

## Installation
```bash
composer require boatrace-sakura/accessory
```

## Usage
```php
<?php

require __DIR__ . '/vendor/autoload.php';

use Boatrace\Sakura\Accessory;

var_dump(Accessory::times(stadiumId: 24, raceNumber: 1));
var_dump(Accessory::times(stadiumId: 24, raceNumber: 1, date: '2024-01-01'));

var_dump(Accessory::comments(stadiumId: 24, raceNumber: 1));
var_dump(Accessory::comments(stadiumId: 24, raceNumber: 1, date: '2024-01-01'));
```

## License
The Boatrace Sakura Accessory is open source software licensed under the [MIT license](LICENSE).
