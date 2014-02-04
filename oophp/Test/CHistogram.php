<?php 

class CHistogram  {
	public $numbers; 
	public function __construct($numbers) {
		echo __METHOD__;
		$this->numbers = $numbers;
	}
	public function __destruct() {
		echo __METHOD__; 
	}
	public function GetHistogram() {
		$histogram = array(); 
		foreach($this->numbers as $val) {
			if(isset($histogram[$val])) {
				$histogram[$val]++; 
			} else {
				$histogram[$val] = 1;
			}
		}
		ksort($histogram);
		return $histogram;
	}
	public function GetHistogramHTML() {

		$html = "<ul>";
		foreach($this->GetHistogram() as $key => $val) {
			$html .= "<li>{$key}: ";
			for($i = 0; $i < $val; $i++) {
				$html .= "*";
			} 
			$html .= "</li>"; 
		}
		$html .= "</ul>";
		return $html;  
	}
}