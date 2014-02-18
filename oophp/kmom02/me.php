<?php 
/**
 * This is a Radix pagecontroller.
 *
 */
// Include the essential config-file which also creates the $Radix variable with its defaults.
include(__DIR__.'/config.php'); 
 
 
// Do it and store it all in variables in the Radix container.
$Radix['title'] = "Me";
 
$Radix['main'] = <<<EOD

<figure class="me">
	<img src="img/me.jpg" alt="Fröken Tilda, en ganska ny bild.">
	<figcaption>
		<p>Fröken Tilda, en ganska ny bild.</p>
	</figcaption>
</figure>

<h1>Välkommen till min me-sida!</h1>
<p>Mitt namn är Tilda men på internet (eller på Dreamhack) känner man mig som 'itse'. Jag är 24 år gammal och bor i Stockholm med min fantastiska sambo Martin (eller 'misse' som han kallas) med två kissekattflickor som heter Kiwi och Keso.</p>
<p>På fritiden tycker jag om att se på film och serier (gärna japanska tecknade serier, men det mesta som inte är superhollywoodsexistiskt brukar funka), måla naglar lite överdrivet detaljerat, gå på rave (nej, jag knarkar inte) och 2 gånger om året jobbar jag mig själv i golvet på <a href="http://www.dreamhack.se/" target="_blank">Dreamhack</a>.</p> 
<p>Mitt mål med att plugga webbutveckling tills jag kan det tillräckligt bra för att kunna jobba med det på heltid. Just nu går plugget på halvtid och under hösten har det av personliga anledningar tagit lite extra tid, men nu äntligen börjar jag komma ikapp igen och snart är jag redo för nya utmaningar!</p>
<p>På tal om plugg och kod så har jag även lite sidoprojekt för mig ibland för att hålla kod roligt! Hör gärna av er till <a href="mailto:tilda.lorentzon@gmail.com">tilda.lorentzon@gmail.com</a> om ni vill titta. :)</p>

EOD;
 

 
 
// Finally, leave it all to the rendering phase of Radix.
include(Radix_THEME_PATH);