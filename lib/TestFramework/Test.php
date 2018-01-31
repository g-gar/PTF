<?php

namespace TestFramework;

class Test {
	private $testcases;

	public function __construct() {
		$this->testcases = array();
	}
	public function register($testcase){
		//TODO: unique testcase
		array_push($this->testcases, $testcase);
	}
	public function unregister($testcase){
		
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