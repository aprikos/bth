<?php 

class Game {
	public $totalpoints; 
	public function newGame($playername); {
		$_SESSION['player'] = $playername;
		$_SESSION['game_active'] = true;
	}
}

?>