<!doctype html>
<html lang="sv">
<meta charset="utf-8">
<title>oophp20</title>
<link rel="stylesheet" href="stylesheet.css">

<h1>En tärning</h1>

<?php 

include("autoloader.php"); 

$dice = New CDiceHand(); 

$dice->Roll();

echo $dice->GetRollsAsImageList(); 


echo "<p><a href='guide3.php'>Klicka här</a> för att kasta tärningarna igen.</p>";

echo "<p>Den totala summan är " . $dice->GetTotal() . ".</p>";

?>

</html>