<?php

namespace TestFramework;

class TestCase {
	public $testName;
	public $testFunction;
	public $params;

	function __construct($testName, $testFunction, $params=array()) {
		$this->testName = $testName;
		$this->testFunction = $testFunction;
		$this->params = $params;
	}
}