<?php

require 'lib/Test.class.php';

class main extends \TestFramework\Test {
	function __construct(){
		parent::__construct();
		print_r($this->assertEqual("1", "2"));
	}
}