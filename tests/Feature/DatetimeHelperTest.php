<?php

/*
 * What samego team is that is 'one thing, a team, work together'
 */

namespace Tests\Feature;

use PHPUnit\Framework\TestCase;
use Samego\Helper\DatetimeHelper;

class DatetimeHelperTest extends TestCase
{
    public function testMsectime()
    {
        $this->assertTrue(is_int(DatetimeHelper::msectime()));
    }
}
