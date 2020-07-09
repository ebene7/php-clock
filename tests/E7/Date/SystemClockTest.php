<?php

namespace E7\Tests\Clock;

use DateTimeInterface;
use DateTimeZone;
use E7\Clock\SystemClock;
use PHPUnit\Framework\TestCase;

class SystemClockTest extends TestCase
{
    public function testSystemNow()
    {
        $clock = new SystemClock();
        
        $now1 = $clock->now();
        $now2 = $clock->now();
        
        $this->assertInstanceOf(DateTimeInterface::class, $now1);
        $this->assertInstanceOf(DateTimeInterface::class, $now2);
        $this->assertNotSame($now1, $now2);
    }

    /**
     * @dataProvider providerSystemNowWithTimezone
     */
    public function testSystemNowWithTimezone(DateTimeZone $timezone)
    {
        $clock = new SystemClock($timezone);
        
        $now = $clock->now();
        $this->assertEquals($timezone, $now->getTimezone());
    }

    public function providerSystemNowWithTimezone(): array
    {
        return [
            [ new DateTimeZone('Europe/Berlin') ],
            [ new DateTimeZone('Europe/Jersey') ],
        ];
    }
}
