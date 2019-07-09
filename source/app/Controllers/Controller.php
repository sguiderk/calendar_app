<?php

namespace Traso\Controllers;
use Traso\Models\CustomDatetimeBlue;
use Traso\Models\CustomDateTimeEarth;
use Traso\Models\CustomDateTimeRed;

/**
 * Class Controller
 * @package Traso\Controllers
 * @author      Samir GUIDERK <samir.guiderk@gmail.com>
 * @version     v.1.0 (07/06/2019)
 * @copyright   Copyright (c) 2019
 */
class Controller {

	public function invoke()
	{
		if ( !isset($_GET['calcul']) ) {

			if (!empty($_GET['dateForEarth']) && $_GET['dateForEarth'] != '0000-00-00') {

                $dateForEarth = new CustomDateTimeEarth($_GET['dateForEarth']);
                $dateForBlue = new CustomDatetimeBlue();
                $dateForRed = new CustomDateTimeRed();
                $dateForRed->setDateFromAmountOfDays($dateForEarth->CalcAmountOfDays());
                $dateForBlue->setDateFromAmountOfDays($dateForEarth->CalcAmountOfDays());

            } else if (!empty($_GET['dateForRed']) &&  $_GET['dateForRed'] != '0000-00-00' ) {

                $dateForRed = new CustomDateTimeRed($_GET['dateForRed']);
                $dateForEarth = new CustomDateTimeEarth();
                $dateForBlue = new CustomDatetimeBlue();
                $dateForEarth->setDateFromAmountOfDays($dateForRed->CalcAmountOfDays());
                $dateForBlue->setDateFromAmountOfDays($dateForRed->CalcAmountOfDays());

            } else if ( !empty($_GET['dateForBlue']) &&  $_GET['dateForBlue'] != '0000-00-00' ) {

                $dateForBlue = new CustomDatetimeBlue($_GET['dateForBlue']);
                $dateForEarth = new CustomDateTimeEarth();
                $dateForRed = new CustomDateTimeRed();
                $dateForEarth->setDateFromAmountOfDays($dateForBlue->CalcAmountOfDays());
                $dateForRed->setDateFromAmountOfDays($dateForBlue->CalcAmountOfDays());

            } else if ( !empty($_GET['dateForBlue']) || !empty($_GET['dateForRed']) || !empty($_GET['dateForEarth']) ) {
                echo '<div class="alert alert-danger" role="alert">Please enter a valid date</div>';
            }
            include(__DIR__.'/../Views/convertdate.php');

		}
		else if (!isset($_GET['convert'])) {

            if (!empty($_GET['date1']) && !empty($_GET['date2']) && !empty($_GET['typeOfDate'])) {

                if ($_GET['typeOfDate'] == 'earth' && $_GET['date1'] != '0000-00-00' && $_GET['date2'] != '0000-00-00') {

                    $date1 = new CustomDateTimeEarth($_GET['date1']);
                    $date2 = new CustomDateTimeEarth($_GET['date2']);
                    $date3 = new CustomDateTimeEarth();
                    $date3->setDateFromAmountOfDays($date1->CalcAmountOfDays() +  $date2->CalcAmountOfDays());

                } else if ($_GET['typeOfDate'] == 'red' && $_GET['date1'] != '0000-00-00' && $_GET['date2'] != '0000-00-00') {

                    $date1 = new CustomDateTimeRed($_GET['date1']);
                    $date2 = new CustomDateTimeRed($_GET['date2']);
                    $date3 = new CustomDateTimeRed();
                    $date3->setDateFromAmountOfDays($date1->CalcAmountOfDays() +  $date2->CalcAmountOfDays());

                } else if ($_GET['typeOfDate'] == 'blue' && $_GET['date1'] != '0000-00-00' && $_GET['date2'] != '0000-00-00') {

                    $date1 = new CustomDatetimeBlue($_GET['date1']);
                    $date2 = new CustomDatetimeBlue($_GET['date2']);
                    $date3 = new CustomDatetimeBlue();
                    $date3->setDateFromAmountOfDays($date1->CalcAmountOfDays() +  $date2->CalcAmountOfDays());
                } else {
                    echo '<div class="alert alert-danger" role="alert">Please enter A valid date</div>';
                }
            }
            include(__DIR__.'/../Views/calculdate.php');
		}
	}
}
