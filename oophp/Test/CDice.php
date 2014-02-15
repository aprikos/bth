<?php 

class CDice {
	public function __construct($faces = 6) {
		$this->faces = $faces; 
	}
	public function __destruct() {
	}
	protected $rolls = array(); 
	private $faces;

	public function GetRollsAsArray() {
		return $this->rolls; 
	}

	public function GetFaces() {
		return $this->faces;
	}

	public function Roll($times) {
		$this->rolls = array(); 

		for($i = 0; $i < $times; $i++) {
			$this->rolls[] = rand(1, $this->faces); 
		}
	}

	public function GetTotal() {
		return array_sum($this->rolls); 
	}

	public function GetAverage() {
		$total = $this->GetTotal();
		$count = count($this->rolls); 
		return $total / $count; 

	}
}

