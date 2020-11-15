<?php
/*
	EntrPoint: index.php
*/

define('ROOT_DIR', __DIR__);

require_once (ROOT_DIR . '/config/Application.php');
require_once (ROOT_DIR . '/utils/utils.php');
require_once (ROOT_DIR . '/classes/Insurance.php');

// init Insurance Object
$insurance = new Insurance();
$quote = $insurance->getQuote();
var_dump($quote);

