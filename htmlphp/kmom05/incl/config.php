<?php
// time page generation, display in footer. comment out to disable timing.
$pageTimeGeneration = microtime(true);

 // start a named session
session_name(preg_replace('/[:\.\/-_]/', '', __FILE__));
session_start();

 error_reporting(-1);

 include("src/common.php");
 include("src/login.php");

// account and password that can login
$userAccount = "doe";
$userPassword = userPassword("doe");


?>