<?php 


class CDice {
	public $rolls = array(); 

	public function Roll($times) {
		$this->rolls = array(); 

		for($i = 0; $i < $times; $i++) {
			$this->rolls[] = rand(1, 6); 
		}
	}

	public function GetTotal() {
		return array_sum($this->rolls); 
	}
}


$dice = New CDice(); 

$times = 6; 
$dice->Roll($times); 
$rolls = $dice->rolls; 


