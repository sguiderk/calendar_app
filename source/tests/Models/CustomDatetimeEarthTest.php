<?php

namespace CalendarAppTest\Models;

use CalendarApp\Models\CustomDateTimeEarth;
use CalendarAppTest\UnitTest;

/**
 * Class CustomDatetimeEarthTest
 * @author Samir GUIDERK <samir.guiderk@gmail.com>
 * @package CalendarAppTest\Models
 * @version     v.1.0 (07/06/2019)
 * @copyright   Copyright (c) 2019
 */
class CustomDatetimeEarthTest extends UnitTest
{
    /**
     * Response.
     *
     * @var
     */
    protected $datetime;
    /**
     * setUp.
     */
    public function setUp()
    {
        $this->datetime = new CustomDateTimeEarth('2019-02-30');
    }

    /**
     * testgetDay
     */
    public function testgetDay()
    {
        $result = $this->datetime->getDay();
        $this->assertEquals($result,30);
    }


    /**
     * testgetMonth
     */
    public function testgetMonth()
    {
        $result = $this->datetime->getMonth();
        $this->assertEquals($result,2);
    }

    /**
     * testgetYear
     */
    public function testgetYear()
    {
        $result = $this->datetime->getYear();
        $this->assertEquals($result,2019);
    }

    /**
     * testCalcAmountOfDays
     */
    public function testCalcAmountOfDays()
    {
        $result = $this->datetime->CalcAmountOfDays();
        $this->assertEquals($result,737025);
    }

    /**
     * testCalcAmountOfDays
     */
    public function testsetDateFromAmountOfDays()
    {
        $result = $this->datetime->setDateFromAmountOfDays($this->datetime->CalcAmountOfDays());
        $this->assertEquals($result,true);

    }

}
