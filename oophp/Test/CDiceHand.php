<?php 

class CDiceHand {
	private $dices;
	private $numDices; 
	private $sum; 

	public function __construct($numDices = 5) {
		$this->dices = array();
		
		for($i = 0; $i < $numDices; $i++) {
			$this->dices[] = New CDiceImage(); 
		}
		$this->numDices = $numDices;
	}

	public function Roll() {
		
	}

	public function GetTotal() {

	}

	public function GetRollsAsImageList() {

	}

	public function 
}