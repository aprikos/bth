<?php 
/**
 * This is a Radix pagecontroller.
 *
 */
// Include the essential config-file which also creates the $Radix variable with its defaults.
include(__DIR__.'/config.php'); 
 
 
// Do it and store it all in variables in the Radix container.
$Radix['title'] = "Redovisningar";
 
$Radix['main'] = <<<EOD

<h1>Redovisningar</h1>
<hr>

<h2>Kmom01: Kom igång med programmering i PHP</h2>
<p>Min utvecklingsmiljö varierar lite beroende på vilken dator jag sitter på men mina filer sparas alltid i en molntjänst som heter <a href="http://owncloud.org">ownCloud</a>. Denna molntjänst har min kära sambo försett med allt som behövs för att köra PHP, jag har till och med en egen webbadress så att jag kan dela med mig av mina projekt därigenom när jag behöver det (utan att först behöva ladda upp projektet på studentservern).</p>
<p>Textredigeraren jag använder är <a href="http://www.sublimetext.com/">Sublime Text 2</a>, inte bara för att den är så väldigt användarvänlig men också för att den funkar till både Windows, Mac OS och Linux (japp, jag hoppar lite mellan alla tre).</p>
<p>Webbguiden php20 har jag redan gått igenom så kände inget direkt behov av att göra det igen. Skumläste den dock för att friska upp minnet. Mitt Anax döpte jag till Radix ("rot" på latin) och det byggde jag medan jag läste igenom <a href="http://dbwebb.se/kunskap/anax-en-hallbar-struktur-for-dina-webbapplikationer">guiden för Anax</a>. Utöver vad som krävdes för att få sidorna att fungera har jag inte gjort några direkta ändringar eller förbättringar (lite för estetikens skull möjligtvis). I Michael Roos kod fanns en del JavaScript och sånt med vilket det stod att vi skulle hoppa över, därför undvek jag all sån kod också när jag "tjuvkikade" på hans kod för att förstå de ändringar som HAN gjort till sin Me-sida.</p>
<p>För att visa min källkod använde jag mig av <a href="http://dbwebb.se/kunskap/visa-kallkod-med-source-php-och-csource">guiden</a>, med undantag för några estetiska tweaks... på grund av tidsbrist har jag inte gjort extrauppgiften med GitHub men det ligger på listan över saker att göra när mitt överbefolkade schema är lite mindre kaotiskt. ;)</p>

EOD;
 

 
 
// Finally, leave it all to the rendering phase of Radix.
include(Radix_THEME_PATH);