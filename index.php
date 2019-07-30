<?php
$start = microtime(true);
ini_set("display_errors", -1);
error_reporting(E_ALL);

define('ROOT_DIR', __DIR__);

//session_start();

require_once 'engine/bootstrap.php';
//echo microtime(true) - $start . " сек.";