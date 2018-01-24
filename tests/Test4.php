<?php

namespace Tests\Test4;
class main {
	function __construct(){

		ini_set('display_errors', 1);
		error_reporting(E_ALL);

		$a = '1';
		$b = &$a;
		$b = "2$b";
		echo $a.", ".$b;
	}
}