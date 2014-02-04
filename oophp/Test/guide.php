<!doctype html>
<html lang="sv">
<meta charset="utf-8">
<title>oophp20</title>


<h1>En tärning</h1>

<?php 

include("autoloader.php"); 

$dice = New CDice($_GET['faces']); 

$times = $_GET['rolls']; 
$dice->Roll($times); 
$rolls = $dice->rolls; 

echo "<p>En tärning kastas <a href='?rolls=6'>6</a>, <a href='?rolls=12'>12</a> eller <a href='?rolls=24'>24</a> gånger, här är resultatet.</p>";	

$histogram = New CHistogram($rolls);

echo $histogram->GetHistogramHTML();

echo "<p>Kastserien var "; 
foreach($rolls as $val) {
	echo $val . ", ";
}
echo "</p>";

echo "<p>Du gjorde " . count($rolls) . " kast.";

echo "<p>Den totala summan är " . $dice->GetTotal() . ".</p>";

echo "<p>Medelvärdet av kasten är " . $dice->GetAverage() . ".</p>";

?>

</html>