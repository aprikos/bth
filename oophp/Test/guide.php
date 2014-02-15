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
$rolls = $dice->GetRollsAsArray(); 

echo "<p>En tärning kastas <a href='?rolls=6&faces=6'>6 gånger med 6 sidor</a>, <a href='?rolls=12&faces=12'>12 gånger med 12 sidor</a> eller <a href='?rolls=24&faces=24'>24 gånger med 24 sidor</a> gånger, här är resultatet.</p>";	

$histogram = New CHistogram($rolls);

echo $histogram->GetHistogramIncludeEmpty($_GET['faces']);

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