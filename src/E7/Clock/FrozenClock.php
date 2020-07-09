<?php

namespace E7\Clock;

use DateTimeImmutable;
use DateTimeInterface;

class FrozenClock implements ClockInterface
{
    private $now;

    public function __construct(DateTimeInterface $now = null)
    {
        $this->now = $now ?? new DateTimeImmutable();
    }

    public function now(): DateTimeInterface
    {
        return $this->now;
    }
}
