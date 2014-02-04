<?php 

session_start();

$_SESSION['round'] = $_POST;

print_r("$_SESSION['round']");

class Dice {
	public function throwDice() {
		return rand(1,6);
	}
}

class Round {
	public $round_score = 
	public function newRound() {
		echo 	"<input type='submit' formmethod='post' name='round' value='Spara omgången'>";
	}
}


$dice = new Dice();
$round = new Round():
$result = 0;


while ($result < 100) {
	$throw = $dice->throwDice();
	if($throw == 1) {
		echo "Oops! You lost :*";
		$newround = $round->newRound();
		echo $newround; 
		exit();
	} else {
		$result = $result + $throw;
		echo $result . "<br>";
		echo $round->newRound();
		echo "<button>Kasta tärningen</button>";
	}
}


?>