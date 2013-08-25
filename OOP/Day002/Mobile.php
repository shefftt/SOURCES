<?php

class Mobile {

	public $device;

	public function __construct ($name,$version) {
		$this->device['name'] = $name;
		$this->device['version'] = $version;
		echo 'Mobile class is startup.<br />';
	}

	public function __destruct () {
		$this->device['name'] = null;
		var_dump($this->device['name']);
		echo "<br />Mobile class is shutdown.<br />";
	} 

}

$mob = new Mobile('HTC','1.0');

?>