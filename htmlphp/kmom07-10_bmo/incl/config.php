<?php

$pageTimeGeneration = microtime(true);

session_name(preg_replace('/[:\.\/-_]/', '', __FILE__));
session_start();

 error_reporting(-1);

 include("src/common.php");

?>