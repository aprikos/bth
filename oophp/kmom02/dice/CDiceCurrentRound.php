<?php

class CDiceCurrentRound {
	private $round; 

	public function __construct() {
		if(!isset($_SESSION['round'])) {
			$_SESSION['round'] = array();
		} 
		if(!isset($_SESSION['game'])) {
			$_SESSION['game'] = array(); 
		}
	}

	public function RoundTotal($points) {
		$_SESSION['round'][] = $points;
	}

	public function GetTotal() {
		return array_sum($_SESSION['round']); 
	}

	public function ResetRound() {
		$_SESSION['round'] = array(); 
	}

	public function SaveGame() {
		$total = $this->GetTotal();
		$_SESSION['game'][] = $total; 
		$this->ResetRound();
	}

	public function CurrentGame() {
		return array_sum($_SESSION['game']); 
	}

	public function ResetGame() {
		$_SESSION['game'] = array(); 
		$this->ResetRound(); 
	}
}