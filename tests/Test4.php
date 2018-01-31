<?php

use \TestFramework\Test;
use \TestFramework\Assert;

class main extends Test {
	function __construct(){
		parent::__construct();

		$a = '1';
		$b = &$a;
		$b = "2$b";
		echo $a.", ".$b;

		Assert::assertEqualString("1", "2");
	}
}