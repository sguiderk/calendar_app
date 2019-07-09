<?php

namespace CalendarAppTest\Models;

use CalendarApp\Models\CustomDateTimeRed;
use CalendarAppTest\UnitTest;

/**
 * Class CustomDatetimeRedTest
 * @author Samir GUIDERK <samir.guiderk@gmail.com>
 * @package CalendarAppTest\Models
 * @version     v.1.0 (07/06/2019)
 * @copyright   Copyright (c) 2019
 */
class CustomDatetimeRedTest extends UnitTest
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
        $this->datetime = new CustomDateTimeRed('2043-10-09');
    }

    /**
     * testCalcAmountOfDays
     */
    public function testgetDay()
    {
        $result = $this->datetime->getDay();
        $this->assertEquals($result,9);
    }


    /**
     * testCalcAmountOfDays
     */
    public function testgetMonth()
    {
        $result = $this->datetime->getMonth();
        $this->assertEquals($result,10);
    }

    /**
     * testgetYear
     */
    public function testgetYear()
    {
        $result = $this->datetime->getYear();
        $this->assertEquals($result,2043);
    }



    /**
     * testCalcAmountOfDays
     */
    public function testCalcAmountOfDays()
    {
        $result = $this->datetime->CalcAmountOfDays();
        $this->assertEquals($result,623324);
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
