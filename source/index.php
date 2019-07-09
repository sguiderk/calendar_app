<?php

/**
 * Load Vendor.
 */
require_once __DIR__ . '/vendor/autoload.php';
include_once(__DIR__ . '/app/Controllers/Controller.php');

	$controller = new \Traso\Controllers\Controller();
	$controller->invoke();

?>