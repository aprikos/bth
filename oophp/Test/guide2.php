<!doctype html>
<html lang="sv">
<meta charset="utf-8">
<title>oophp20</title>
<link rel="stylesheet" href="stylesheet.css">

<h1>En tärning</h1>

<?php 

include("autoloader.php"); 

$dice = New CDiceImage(); 

$times = $_GET['rolls']; 
$dice->Roll($times); 
$rolls = $dice->GetRollsAsArray(); 

echo "<p>En tärning kastas <a href='?rolls=6'>6 gånger</a>, <a href='?rolls=12'>12 gånger</a> eller <a href='?rolls=24'>24 gånger</a>, här är resultatet.</p>";	

echo $dice->GetRollsAsImageList(); 

echo "<p>Du gjorde " . count($rolls) . " kast.";

echo "<p>Den totala summan är " . $dice->GetTotal() . ".</p>";

echo "<p>Medelvärdet av kasten är " . $dice->GetAverage() . ".</p>";

?>

</html>