<?php

	ini_set("display_errors", 1);

	$path_tests = 'tests/';
	$avaiable_tests = array_map(function($element){
		return trim($element, '.php');
	}, array_diff(scandir($path_tests), array('..', '.')));

	try {
		if (!count($args)) {
			Throw new \Exception("No test given. Executing first test in tests folder:<br/>");
		} else $test = $args[0];
	} catch (\Exception $e){
		echo $e->getMessage();
		$test = $avaiable_tests[2];
	} finally {
		try {
			if ($t = array_search($test, $avaiable_tests)) {
				require $path_tests . $avaiable_tests[$t] . '.php';
				$test = new main();
			} else Throw new \Exception("Test '$test' not found");
		} catch (\Exception $e) {
			echo "Test invalid - " . $e->getMessage();
		}
	}