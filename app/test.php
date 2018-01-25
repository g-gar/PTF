<?php

	ini_set("display_errors", 1);

	$path_tests = 'tests/';
	$avaiable_tests = array_map(function($element){
		return trim($element, '.php');
	}, array_diff(scandir($path_tests), array('..', '.')));

	if (count($args[0]) > 0) {
		try {
			if (($t = array_search($args[0], $avaiable_tests)) >= 0) {
				//TODO: handle this error
				require $path_tests . $avaiable_tests[$t] . '.php';
				$test_ns = "\\Tests\\$args[0]";
				$test = "$test_ns\\main";

				$test = new main();
			}
		} catch (\Exception $e) {
			echo "Test invalid";
		}
	} else echo "No test found";