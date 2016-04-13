<?php
ini_set('max_execution_time', 100); 
ini_set('memory_limit','256M');

ini_set("display_errors", 1); 
error_reporting(E_ALL);

require_once("CollatzProblem.php");

$number   = 1000000;

if(!empty($argv) && !empty($argv[1])) {
    $number = $argv[1];
} else if(!empty($_GET) && !empty($_GET['number'])) {
        $numerator = $_GET['number'];
}

$obj = new CollatzProblem();
$obj->findLongestChain($number);
?>