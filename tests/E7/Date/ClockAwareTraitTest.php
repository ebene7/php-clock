<?php

namespace E7\Tests\Clock;

use E7\Clock\ClockAwareTrait;
use E7\Clock\ClockInterface;
use E7\Clock\FrozenClock;
use E7\Clock\SystemClock;
use PHPUnit\Framework\TestCase;

class ClockAwareTraitTest extends TestCase
{
    use ClockAwareTrait;
    
    public function testGetClock()
    {
        $this->setClock();
        $this->assertInstanceOf(ClockInterface::class, $this->getClock());
        $this->assertInstanceOf(SystemClock::class, $this->getClock());
    }

    public function testGetClockWithInitialisation()
    {
        $clock = new FrozenClock();
        
        $this->setClock($clock);
        $this->assertSame($clock, $this->getClock());
    }
    
    /**
     * @expectedException RuntimeException
     */
    public function testGetClockWithoutInitialisation()
    {
        $this->getClock();
    }
}
