<?php

namespace TestFramework;

class TestCase {
	public $testName;
	public $testFunction;

	function __construct($testName, $testFunction) {
		$this->testName = $testName;
		$this->testFunction = $testFunction;
	}
}