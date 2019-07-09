<?php

/**
 * Load Vendor.
 */
require_once __DIR__ . '/vendor/autoload.php';
include_once(__DIR__ . '/app/Controllers/Controller.php');

	$controller = new \CalendarApp\Controllers\Controller();
	$controller->invoke();
