<?php

define ('PATH',dirname(__FILE__));

class Foo {
	public function hello () {
		return 'Hello am a foo class';
	}
}

class Book {

	public $name; // Null, String, Boolean, Integer, Float And Array
	
	public function setNameAsObject () {
		$this->name = new Foo();
	}
	
}

$book = new Book();

$book->setNameAsObject();

echo  $book->name->hello();

var_dump($book->name);

?>