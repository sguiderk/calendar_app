<?php

namespace CalendarApp\Models;

/**
 * Class CustomDateTimeRed
 * @package CalendarApp\Models
 * @author      Samir GUIDERK <samir.guiderk@gmail.com>
 * @version     v.1.0 (07/06/2019)
 * @copyright   Copyright (c) 2019
 */
class CustomDateTimeRed extends CustomDatetime
{

    const MONTH_PER_YEAR = 15;
    const DAY_PER_MONTH = 20;
    const DAY_PER_YEAR = 305;

    /**
     * @return int
     */
    public function CalcAmountOfDays():int{

        $this->somOfDays = $this->day;
        $this->somOfDays += $this->month * self::DAY_PER_MONTH;
        $this->somOfDays += $this->year * self::DAY_PER_YEAR;

        return $this->somOfDays;
    }

    /**
     * @param int $days
     * @return bool
     */
    public function setDateFromAmountOfDays(int $days): bool{

        $this->year = $days / self::DAY_PER_YEAR;
        if (is_float($this->year)) {
            $days = $days % (int)$this->year;
            $this->month = $days / self::DAY_PER_MONTH;
        }
        if (is_float($this->month)) {
            $days = $days % (int)$this->month;
            $this->day = $days;
        }

        return true;
    }

    /**
     * @desc this method for test if year red planet is leap.
     * @return string
     */
    public function __toString() {

        if ( $this->year % 5 != 0) {
            return sprintf('%04s-%02s-%02s', (int)$this->year,(int)$this->month,(int)$this->day);
        } else {
            return sprintf('%04s-EXTRA', (int)$this->year);
        }
    }

}
