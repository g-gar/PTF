<?php

namespace TestFramework;

class TestCase {
	public $name;
	public $function;
	public $args;
	public $results;

	function __construct($name, $function) {
		$this->name = $name;
		$this->function = $function;
		$this->args = array();
		$this->results = array();
	}

	public function run($args=array()){
		$res = call_user_func_array($this->function, $args);

		array_push($this->results, array(
			"parameters" => $args,
			"result" => $res
		));
	}

	public function getFails(){
		return array_filter($this->results, function($result){
			return $result["result"] instanceof \Exception;
		});
	}

	public function getCorrect(){
		return array_filter($this->results, function($result){
			return !($result["result"] instanceof \Exception);
		});
	}
}