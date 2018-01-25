<?php

namespace TestFramework;

class TestCase {
	public $testName;
	public $testFunction;

	function __construct($testName, \Closure $testFunction) {
		$this->testName = $testName;
		$this->testFunction = $testFunction;
	}
}

class Test {
	private $testsCases;

	public function __construct() {
		$this->testsCases = array();
	}

	public function register($testCase){
		$this->testCases[$testCase->testName] = $testCase->testFunction;
	}

	public function run($testName, \ArrayObject $params=null) {
		// TODO: inject params 
		if ($t = $this->get($testName))
			return $t();
		else Throw new \Exception("not found");
	}

	public function get($testName) {
		return (!!array_search($testName, array_keys($this->testCases))) ? $this->$testCases[$testName] : null;
	}

	public function assertEqual($string1, $string2){
		if ($string1 === $string2) {
			return true;
		} else {
			Throw new Exception("assertEqual failed for '$string1' and '$string2'");
		}
	}
}