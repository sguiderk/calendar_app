<?php


namespace TrasTest\Models;

use Traso\Models\CustomDatetime;
use TrasTest\UnitTest;

/**
 * Class CustomDatetimeTest
 * @author Samir GUIDERK <samir.guiderk@gmail.com>
 * @package TrasTest\Models
 * @version     v.1.0 (07/06/2019)
 * @copyright   Copyright (c) 2019
 */
class CustomDatetimeTest  extends UnitTest
{
    /**
     * @var
     */
    protected $datetime;
    /**
     * setUp.
     */
    public function setUp()
    {
        $this->datetime = $this->createClassWithAbstractParams(CustomDatetime::class);

    }

    /**
     * testCalcAmountOfDays
     */
    public function testgetDay()
    {
        $result = $this->datetime->getDay();
        $this->assertEquals($result,1);
    }


    /**
     * testCalcAmountOfDays
     */
    public function testgetMonth()
    {
        $result = $this->datetime->getMonth();
        $this->assertEquals($result,1);
    }

    /**
     * testgetYear
     */
    public function testgetYear()
    {
        $result = $this->datetime->getYear();
        $this->assertEquals($result,1);
    }


    /**
     * @expectedException \Exception
     * @expectedExceptionMessage Please entre a valid format YYYY-MM-DD
     */
    public function testExpetionErrorFormat()
    {
        $mock = $this->getMockBuilder(CustomDatetime::class)
            ->setMethods(array('__construct'))
            ->setConstructorArgs(array('55-44-44'))
            ->getMock();
    }

}