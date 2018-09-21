<?php

class main extends \TestFramework\Test {
	function __construct(){

		$t = new \TestFramework\TestCase("equal strings", "\\TestFramework\\Assert\\Assert::assertString");
		$t->run(array("a", "A"));
		$t->run(array("a", "a"));

		print_r($t->getFails());
		print_r($t->getCorrect());
	}
}
