<?php

class Calculator{

	public $input1;
	public $input2;
	public $total = null;

	public function __construct(){
		$this->total = null;
	}

	public function add($input){
		if(count($input) == 1){
			$this->total += $input; 
		}
		else{
			$this->total = $input[0] + $input[1];
		}
		return $this;
	}

	public function subtract($input){
		if(count($input) == 1){
			$this->total -= $input; 
		}
		else{
			$this->total = $input[0] - $input[1];
		}
		return $this;
	}

	public function multiply($input){
		if(count($input) == 1){
			$this->total *= $input; 
		}
		else{
			$this->total = $input[0] * $input[1];
		}
		return $this;
	}

	public function divide($input){
		if(count($input) == 1){
			$this->total /= $input; 
		}
		else{
			$this->total = $input[0] / $input[1];
		}
		return $this;
	}

	public function getTotal(){
		return $this->total;
	}
}

$calc = new Calculator;
echo $calc->add(array(3,4))->divide(4)->subtract(6)->multiply(2)->getTotal();


?>