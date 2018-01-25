<?php

require 'lib/Test.class.php';

use \TestFramework\Assert;

class main extends \TestFramework\Test {
	function __construct(){
		parent::__construct();
		Assert::assertEqualString("1", "2");
		Assert::assertEqualString("1", "3");
	}
}