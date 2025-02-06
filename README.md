# Accessory

[![Build Status](https://github.com/BoatraceVentureProject/Accessory/workflows/Tests/badge.svg)](https://github.com/BoatraceVentureProject/Accessory/actions?query=workflow%3Atests)
[![codecov](https://codecov.io/gh/BoatraceVentureProject/Accessory/graph/badge.svg?token=G22GRD1CUF)](https://codecov.io/gh/BoatraceVentureProject/Accessory)
[![Latest Stable Version](https://poser.pugx.org/bvp/accessory/v/stable)](https://packagist.org/packages/bvp/accessory)
[![Latest Unstable Version](https://poser.pugx.org/bvp/accessory/v/unstable)](https://packagist.org/packages/bvp/accessory)
[![License](https://poser.pugx.org/bvp/accessory/license)](https://packagist.org/packages/bvp/accessory)

## Installation
```bash
composer require bvp/accessory
```

## Usage
```php
<?php

require __DIR__ . '/vendor/autoload.php';

use Boatrace\Venture\Project\Accessory;

var_dump(Accessory::times(stadiumId: 24, raceNumber: 1));
var_dump(Accessory::times(stadiumId: 24, raceNumber: 1, date: '2024-01-01'));

var_dump(Accessory::comments(stadiumId: 24, raceNumber: 1));
var_dump(Accessory::comments(stadiumId: 24, raceNumber: 1, date: '2024-01-01'));
```

## License
Accessory in the Boatrace Venture Project is open source software licensed under the [MIT license](LICENSE).
