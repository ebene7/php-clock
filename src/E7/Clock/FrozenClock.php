<?php

namespace E7\Clock;

use DateTimeInterface;

class FrozenClock implements ClockInterface
{
    private $now;

    public function __construct(DateTimeInterface $now)
    {
        $this->now = $now;
    }

    public function now(): DateTimeInterface
    {
        return $this->now;
    }
}
