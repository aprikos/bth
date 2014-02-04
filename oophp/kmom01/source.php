<?php 
/**
 * This is a Radix pagecontroller.
 *
 */
// Include the essential config-file which also creates the $Radix variable with its defaults.
include(__DIR__.'/config.php'); 





// Create the object to display sourcecode
//$source = new CSource();
$source = new CSource(array('secure_dir' => '..', 'base_dir' => '..', 'add_ignore' => array('.htaccess')));

	// Do it and store it all in variables in the Radix container.
	$Radix['title'] = "Visa källkod";
	$Radix['main'] = "<h1>Visa källkod</h1>\n" . $source->View();

// Finally, leave it all to the rendering phase of Radix.
include(Radix_THEME_PATH);

