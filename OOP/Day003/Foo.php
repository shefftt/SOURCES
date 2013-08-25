<?php

class Foo {

	const HELLO = 'Hello am a const'; // String, integer, float, boolean 

	public function helloConst () {
		//return self::HELLO;
		//return self::$var;
		//return self::Bar();
		// PHP 5.4.x
		return self::Bar();
	}
	
	static public $var = 'Am a variable';
	
	static public function Bar() {
		return 'Am a static Bar method.';
	}
}

$foo = new Foo();

//echo $foo->helloConst();

echo $foo::Bar();

//echo $foo->var;

//echo $foo->helloConst();

/*******************/
// in PHP 5.3.x or newer
#echo 'Only in PHP 5.3.x you can use = '.$foo::HELLO;

// in PHP 5.2.x or older
//echo Foo::HELLO;

?>