<?php

require('../vendor/autoload.php');

define('WEBROOT', str_replace("Webroot/index.php", "", $_SERVER["SCRIPT_NAME"]));// gan hang so WEBROOT  = link to index;
define('ROOT', str_replace("Webroot/index.php", "", $_SERVER["SCRIPT_FILENAME"]));//gan hang so ROOT link tuyet doi di tu root to index;


use MVC\Dispatcher;

$dispatch = new Dispatcher();
$dispatch->dispatch();