<?php 

class Round extends Game {
	public $round; 
	public $roundpoints; 
	public function newRound() {
		$_SESSION['round'] = 1; 
	}
	public function endRound() {
		$_SESSION['totalpoints'] = $this->$totalpoints + $this->roundpoints;
	}
}

?>