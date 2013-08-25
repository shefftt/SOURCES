<?php

class SimpleClass {

	public $var = 'Hello ..';

	public function any () {
		return $this->var;
	}
	
	public function printOut () {
		echo $this->any();
	}
	
} 

$simple = new SimpleClass();

$simple->var = 'Good';

$simple->printOut();

//var_dump($simple);

?>