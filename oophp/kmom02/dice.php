<?php 
/**
 * This is a Radix pagecontroller.
 *
 */
// Include the essential config-file which also creates the $Radix variable with its defaults.
include(__DIR__.'/config.php'); 
 
 
// Do it and store it all in variables in the Radix container.
$Radix['title'] = "Tärningsspelet";

$Radix['stylesheets'][] = 'css/dice.css';

ob_start(); 
include("dice/dice.php"); 
$Radix['main'] = ob_get_contents(); 
ob_end_clean();


 
// Finally, leave it all to the rendering phase of Radix.
include(Radix_THEME_PATH);