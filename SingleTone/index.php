<?php

require_once ('SingleTone.php');
require_once ('DB.php');
require_once ('Logger.php');

$dbInstance = DB::getInstances();
$mysql = DB::getInstances();
$loggerInstance = Logger::getInstances();

print_r([
     $mysql, $dbInstance, $loggerInstance,
]);