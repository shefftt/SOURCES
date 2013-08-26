<?php

class SomeClass {

	// self,static,parent:: = No
	// $this->              = Yes
	public $var = 'Am a var';

	// self,static,parent:: = Yes
	// $this->              = Yes
	public function foo () {
		return 'Am a foo method';
	}
	
	// self,static,parent:: = Yes
	// $this->              = No
	public static $stt = 'Am a static variable';
	
	// self,static,parent:: = Yes
	// $this->              = No
	const ANY  = 'Am a any const';
	
	// self,static,parent:: = Yes
	// $this->              = Yes
	public static function bar () {
		return 'A a static var method';
	}
	
	// Print output 
	public function printOut () {
		echo self::bar();
	}
	
}

$class = new SomeClass();

echo $class->bar();


//$class->printOut();





?>