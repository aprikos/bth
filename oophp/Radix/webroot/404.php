<?php 
/**
 * This is a Radix pagecontroller.
 *
 */
// Include the essential config-file which also creates the $Radix variable with its defaults.
include(__DIR__.'/config.php'); 
 
 
// Do it and store it all in variables in the Radix container.
$Radix['title'] = "404";
$Radix['header'] = "";
$Radix['main'] = "This is a Radix 404. Document is not here.";
$Radix['footer'] = "";
 
// Send the 404 header 
header("HTTP/1.0 404 Not Found");
 
 
// Finally, leave it all to the rendering phase of Radix.
include(Radix_THEME_PATH);