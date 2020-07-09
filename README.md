# php-clock

Provides a simple abstraction of a clock, following the suggestion by [Martin Fowler](https://martinfowler.com/bliki/ClockWrapper.html).

## Installation

Package is available on [Packagist](http://packagist.org/packages/ebene7/php-clock),
you can install it using [Composer](http://getcomposer.org).

```sh
$ composer require ebene7/php-clock
```

## Basic usage

### `SystemClock`

Create a SystemClock object and simply use it! Object that will return the 
current time based on the given timezone

```php
<?php

use E7\Clock\SystemClock;

$clock = new SystemClock();
$now = $clock->now();

```

It's also possible to set the timezone.

```php
<?php

use DateTimeZone;
use E7\Clock\SystemClock;

$timezone = new DateTimeZone('Europe/Berlin');
$clock = new SystemClock(timezone);
$now = $clock->now();
```

### `FrozenClock`

The FrozenClock simplfies testing and it's also esy to use. The FrozenClock
object always returns a fixed time object.

```php
<?php

use DateTimeImmutable;
use E7\Clock\FrozenClock;

$now = new DateTimeImmutable();
$clock = new FrozenClock($now);
$now = $clock->now();

```

## Credits

This project is inspired by [`lcobucci/clock`](https://github.com/lcobucci/clock) (originally licensed under MIT by [Luís Cobucci](https://github.com/lcobucci)).