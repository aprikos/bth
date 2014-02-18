<h1>Tärningsspelet</h1>

<p>Kasta tärningen och försök komma upp i 100 poäng. Får du en etta försvinner din omgång så kom ihåg att spara din runda ibland!</p> 

<?php 

include("dice/CDice.php");
include("dice/CDiceImage.php");
include("dice/CDiceCurrentRound.php"); 

$dice = New CDiceImage(); 
$round = New CDiceCurrentRound();


if(isset($_GET['resetgame'])) {
	$round->ResetGame(); 
}

if(isset($_GET['reset'])) {
	$round->ResetRound(); 
}

if(isset($_GET['save'])) {
	$round->SaveGame(); 
}

if(isset($_GET['roll'])) {
	$dice->Roll(1);
	$roll = $dice->GetRollsAsImageList(); 
	echo $roll; 
	$points = $dice->GetTotal();
	$round->RoundTotal($points);
	if($points == 1) {
		$round->ResetRound();
		$comments = array(
			"Etta. Nu äru på NOLL igen om dunte sparat!",
			"Haha, lost yo points, didn't you :D",
			"HA! LOOOOSEEEEEER!"
		); 
		echo $comments[rand(0, 2)]; 
	}
} 

echo "<p><a href='?roll'>Klicka här</a> för att kasta tärningen.</p>";

echo "<p>Summan av rundan är " . $round->GetTotal() . ". <a href='?save'>Klicka här</a> för att spara poängen!</p>";

echo "<p>Dina totala poäng för spelet är " . $round->CurrentGame() . ".</p>";

echo "<p><a href='?resetgame'>Klicka här</a> för att nollställa räknaren och börja om spelet.</p>";

?>
