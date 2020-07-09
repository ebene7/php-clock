<?php

namespace E7\Clock;

use DateTimeImmutable;
use DateTimeInterface;
use DateTimeZone;

final class SystemClock implements ClockInterface
{
    /** @var DateTimeZone */
    private $timezone;
    
    public function __construct(DateTimeZone $timezone = null)
    {
        $this->timezone = $timezone;
    }
    
    public function now(): DateTimeInterface
    {
        return new DateTimeImmutable('now', $this->timezone);
    }
}
