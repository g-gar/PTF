<?php

require 'lib/Test.class.php';

use \TestFramework\Test;
use \TestFramework\TestCase;
use \TestFramework\Assert;

class main extends Test {
	function __construct(){

		$t = new TestCase("equal strings", "\\TestFramework\\Assert::assertEqualString");
		$t->run(array("a", "A"));
		$t->run(array("a", "a"));

		print_r($t->getFails());
		print_r($t->getCorrect());
	}
}