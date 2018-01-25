<?php

require 'lib/Test.class.php';
require 'tests/classes/Facade1.class.php';

class main extends \TestFramework\Test {
	function __construct(){
		//parent::__construct();

		ini_set('display_errors', 1);
		error_reporting(E_ALL);

		$a = '1';
		$b = &$a;
		$b = "2$b";
		echo $a.", ".$b;

		$this->assertEqual("1", "1");
	}
}