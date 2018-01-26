<?php

namespace TestFramework;

require 'lib/TestCase.class.php';
require 'lib/Assert.class.php';

use \TestFramework\Assert;

class Test {
	private $testsCases;
	private $test_results;

	public function __construct() {
		$this->testsCases = array();
		$this->test_results = array();
	}
	public function register($testCase){
		if ($testCase instanceof \Closure)
			$fn = $testCase->testFunction;
		else  {
			$fn = $testCase->testFunction;
		}
		$this->testCases[$testCase->testName] = $fn;
	}
	public function run($testname, $params=array()) {
		$testcase = $this->get($testname);
		$testcase->run($params);
	}
	public function get($testName) {
		return array_search($testName, array_keys($this->testCases)) >= 0 ? $this->testCases[$testName] : null;
	}
	public function getFailedTests(){
		return array_filter($this->test_results, function($result){
			return $result instanceof \ErrorException;
		});
	}
	public function getCorrectTests(){
		return array_filter($this->test_results, function($result){
			return !($result instanceof \ErrorException);
		});
	}
}