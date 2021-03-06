<?php

namespace E7\Tests\Clock;

use DateTime;
use DateTimeImmutable;
use DateTimeInterface;
use E7\Clock\FrozenClock;
use PHPUnit\Framework\TestCase;

class FrozenClockTest extends TestCase
{
    public function testFrozenNowWithoutConstructorArgument()
    {
        $clock = new FrozenClock();

        $now1 = $clock->now();
        $now2 = $clock->now();

        $this->assertSame($now1, $now2);
    }

    /**
     * @dataProvider providerFrozenNow
     */
    public function testFrozenNow(DateTimeInterface $now)
    {
        $clock = new FrozenClock($now);
        $this->assertSame($now, $clock->now());
    }
    
    public function providerFrozenNow(): array
    {
        return [
            [ new DateTime('2020-05-15') ],
            [ new DateTimeImmutable('2020-10-15') ],
        ];
    }
}
