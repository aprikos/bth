<!doctype html>
<html lang="sv">
<meta charset="utf-8">
<title>oophp20</title>
<link rel="stylesheet" href="stylesheet.css">

<h1>Kasta tärning - spelet 21</h1>

<p>Försök komma så nära 21 som möjligt utan att gå över!</p>

<?php 

include("autoloader.php"); 

session_name('game'); 
session_start();


$dice = New CDiceHand(); 

if(isset($_GET['reset'])) {
	$dice->ResetTotal(); 
}


if(isset($_GET['roll'])) {
	$dice->Roll();
	echo $dice->GetRollsAsImageList(); 
} 

echo "<p><a href='?roll'>Klicka här</a> för att kasta tärningarna.</p>";

$total = $dice->GetTotal();

echo "<p>Den totala summan av handen är " . $total . ".</p>";

$dice->SaveTotal($total); 

echo "<p>Den totala summan är " . ($_SESSION['total']) . ".</p>";

echo "<p><a href='?reset'>Klicka här</a> för att nollställa räknaren och börja om spelet.</p>";


?>

</html>