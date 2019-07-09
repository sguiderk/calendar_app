<?php

namespace CalendarApp\Contracts;

/**
 * Interface CustomDateTimeContract
 * @package CalendarApp\Contracts
 * @author  Samir GUIDERK <samir.guiderk@gmail.com>
 * @version   v.1.0 (07/06/2019)
 * @copyright   Copyright (c) 2019
 */
interface CustomDateTimeContract
{

    public function SetYearAndMonthAndDay(string $date): bool;

    public function CalcAmountOfDays():int;

    public function setDateFromAmountOfDays(int $days): bool;

}
