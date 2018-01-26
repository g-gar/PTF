<?php

require 'lib/Test.class.php';

use \TestFramework\Test;
use \TestFramework\TestCase;
use \TestFramework\Assert;

class main extends Test {
	function __construct(){

		$this->register(new TestCase("1==2", function(){
			Assert::assertEqualString("1", "2");
		}));
		$this->register(new TestCase("1==1", function(){
			Assert::assertEqualString("1", "1");
		}));
		$this->register(new TestCase("equal strings", "\\TestFramework\\Assert::assertEqualString"));

		$this->run("1==2");
		$this->run("1==1");
		$this->run("equal strings", array("a", "a"));
		$this->run("equal strings", array("kike", "Enrique"));

		print_r($this->getFailedTests());
		print_r($this->getCorrectTests());
	}
}