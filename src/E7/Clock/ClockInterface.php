<?php

namespace E7\Clock;

use DateTimeInterface;

interface ClockInterface
{
    public function now(): DateTimeInterface;
}
