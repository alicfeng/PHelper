<?php

/*
 * What samego team is that is 'one thing, a team, work together'
 */

namespace Samego\Helper;

/**
 * Class DatetimeHelper
 * 日期时间助手类.
 * @version 1.0.0
 * @author  AlicFeng
 */
class DatetimeHelper
{
    /**
     * @function    msectime
     * @description get current unix timestamp with microseconds
     * @return int
     * @datetime    2021/5/29 下午4:24
     * @author      AlicFeng
     */
    public static function msectime(): int
    {
        return (int) (microtime(true) * 1000);
    }
}
