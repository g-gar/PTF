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
		try {
			return $this->get($testName)();
		} catch (\Exception $exception) {
			return $exception->getMessage();
		}
	}
	public function get($testName) {
		return array_search($testName, array_keys($this->testCases)) >= 0 ? $this->testCases[$testName] : null;
	}
}

class Assert {
	public static function assertEqualString($expected, $actual){
		if (is_string($actual) && is_string($expected) && $actual == $expected) {
				
		} else Throw new \Exception("Assert equal failed for strings '$actual' and '$expected'");
	}
}