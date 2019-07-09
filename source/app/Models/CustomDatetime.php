<?php

namespace CalendarApp\Models;
use CalendarApp\Contracts\CustomDateTimeContract;

/**
 * Class CustomDatetime
 * @package     CalendarApp.
 * @author      Samir GUIDERK <samir.guiderk@gmail.com>
 * @version     v.1.0 (07/06/2019)
 * @copyright   Copyright (c) 2019
 */
class CustomDatetime implements CustomDateTimeContract
{
    /**
     * @var
     */
    protected $day = 1;

    /**
     * @var
     */
    protected $month = 1;

    /**
     * @var
     */
    protected $year = 1;

    /**
     * @var
     */
    protected $somOfDays = 0;

    const MONTH_PER_YEAR = 0;
    const DAY_PER_MONTH = 0;
    const DAY_PER_YEAR = 0;

    /**
     * CustomDatetime constructor.
     * @param string|null $dateFormat
     * @throws \Exception
     */
    public function __construct(string $dateFormat = null)
    {
        if( $dateFormat != null ) {

            if (preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$dateFormat)) {
                $this->SetYearAndMonthAndDay($dateFormat);
            } else {
                throw new \Exception('Please entre a valid format YYYY-MM-DD');
            }
        }
    }

    /**
     * @param string $date
     * @return bool
     */
    public function SetYearAndMonthAndDay(string $date): bool
    {
        $arrayDate = explode('-',$date);
        $this->year = $arrayDate[0];
        $this->month = $arrayDate[1];
        $this->day = $arrayDate[2];

        return true;
    }

    /**
     * @return int
     */
    public function CalcAmountOfDays():int
    {
        return $this->somOfDays;
    }

    /**
     * @param int $days
     * @return bool
     */
    public function setDateFromAmountOfDays(int $days): bool
    {
        return true;
    }

    /**
     * @return string
     */
    public function __toString(){

        return sprintf('%04s-%02s-%02s', (int)$this->year,(int)$this->month,(int)$this->day);
    }

    /**
     * @return mixed
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * @return mixed
     */
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * @return mixed
     */
    public function getSomOfDays()
    {
        return $this->somOfDays;
    }

    /**
     * @return mixed
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param mixed $day
     */
    public function setDay($day): void
    {
        $this->day = $day;
    }

    /**
     * @param mixed $month
     */
    public function setMonth($month): void
    {
        $this->month = $month;
    }

    /**
     * @param mixed $somOfDays
     */
    public function setSomOfDays($somOfDays): void
    {
        $this->somOfDays = $somOfDays;
    }

    /**
     * @param mixed $year
     */
    public function setYear($year): void
    {
        $this->year = $year;
    }

}
