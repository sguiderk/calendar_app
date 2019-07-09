<?php


namespace CalendarAppTest\Models;

use CalendarApp\Models\CustomDatetimeBlue;
use CalendarAppTest\UnitTest;

/**
 * Class CustomDatetimeBlueTest
 * @author Samir GUIDERK <samir.guiderk@gmail.com>
 * @package CalendarAppTest\Models
 * @version     v.1.0 (07/06/2019)
 * @copyright   Copyright (c) 2019
 */
class CustomDatetimeBlueTest  extends UnitTest
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
        $this->datetime = new CustomDatetimeBlue('1934-06-09');
    }

    /**
     * testgetDay
     */
    public function testgetDay()
    {
        $result = $this->datetime->getDay();
        $this->assertEquals($result,9);
    }


    /**
     * testgetMonth
     */
    public function testgetMonth()
    {
        $result = $this->datetime->getMonth();
        $this->assertEquals($result,6);
    }

    /**
     * testgetYear
     */
    public function testgetYear()
    {
        $result = $this->datetime->getYear();
        $this->assertEquals($result,1934);
    }


    /**
     * testCalcAmountOfDays
     */
    public function testCalcAmountOfDays()
    {
        $result = $this->datetime->CalcAmountOfDays();
        $this->assertEquals($result,773849);
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
