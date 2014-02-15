<?php 

class CDiceHand {
	private $dices;
	private $numDices; 

	public function __construct($numDices = 5) {
		$this->dices = array();
		
		for($i = 0; $i < $numDices; $i++) {
			$this->dices[] = New CDiceImage(); 
		}
		$this->numDices = $numDices;
	}

	public function Roll() {
		foreach($this->dices as $dice) {
			$dice->Roll(1); 
		}
	}

	public function GetTotal() {
		$sum = 0;
		foreach($this->dices as $dice) {
			$sum = $dice->GetTotal() + $sum;
		}
		return $sum;
	}

	public function GetRollsAsImageList() {
		$html = "<ul class='dice'>"; 
		foreach($this->dices as $dice) {
			$rollz = $dice->GetRollsAsArray(); 
			$roll = $rollz[0];
			$html .= "<li class='dice-{$roll}'></li>"; 
		}
		$html .= "</ul>"; 
		return $html; 
	}
}