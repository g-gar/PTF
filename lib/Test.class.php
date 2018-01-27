<?php

namespace TestFramework;

require 'lib/TestCase.class.php';
require 'lib/Assert.class.php';

use \TestFramework\Assert;

class Test {
	private $testcases;

	public function __construct() {
		$this->testcases = array();
	}
	public function register($testcase){
		//TODO: unique testcase
		array_push($this->testcases, $testcase);
	}
	public function run($testname, $params=array()) {
		$testcase = $this->get($testname);
		$testcase->run($params);
	}
	public function get($testname) {
		$t = array_filter($this->testcases, function($testcase) use ($testname){
			return $testcase->name == $testname;
		});
		return count($t) > 0 ? $t[0] : null;
	}
	public function getFailedTests(){
		
	}
	public function getCorrectTests(){
		
	}
}