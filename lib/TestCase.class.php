<?php

namespace TestFramework;

class TestCase {
	public $testName;
	public $testFunction;
	public $args;
	public $results;

	function __construct($testName, $testFunction) {
		$this->testName = $testName;
		$this->testFunction = $testFunction;
		$this->args = array();
		$this->results = array();
	}

	public function run($args=array()){
		$res = !!count($args) ? call_user_func_array($this->testFunction, $args) : $this->testFunction();

		array_push($this->results, array(
			"parameters" => $args,
			"result" => $res
		));

		print_r($this->results);
	}
}