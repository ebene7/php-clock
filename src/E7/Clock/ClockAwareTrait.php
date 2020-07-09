<?php

namespace E7\Clock;

use RuntimeException;

trait ClockAwareTrait
{
    /** @var ClockInterface */
    private $clock;
    
    protected function getClock(): ClockInterface
    {
        if (null === $this->clock) {
            throw new RuntimeException('No Clock object. Call setClock() first!');
        }
        return $this->clock;
    }
    
    protected function setClock(ClockInterface $clock = null): self
    {
        $this->clock = null !== $clock ? $clock : new SystemClock();
        
        return $this;
    }
}
