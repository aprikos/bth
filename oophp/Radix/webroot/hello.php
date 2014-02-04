<?php 
/**
 * This is a Radix pagecontroller.
 *
 */
// Include the essential config-file which also creates the $Radix variable with its defaults.
include(__DIR__.'/config.php'); 
 
 
// Do it and store it all in variables in the Radix container.
$Radix['title'] = "Hello World";
 
$Radix['header'] = <<<EOD
<img class='sitelogo' src='img/Radix.png' height='70' alt='Radix Logo'/>
<span class='sitetitle'>Radix webbtemplate</span>
<span class='siteslogan'>Återanvändbara moduler för webbutveckling med PHP</span>
EOD;
 
$Radix['main'] = <<<EOD
<h1>Hej Världen</h1>
<p>Detta är en exempelsida som visar hur Radix ser ut och fungerar.</p>
EOD;
 
$Radix['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright &copy; Matilda Lorentzon 2014 | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;
 
 
// Finally, leave it all to the rendering phase of Radix.
include(Radix_THEME_PATH);