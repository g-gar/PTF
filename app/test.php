<?php

	if (count($args[0]) > 0) {
		require "tests/$args[0].php";
		$test_ns = "\\Tests\\$args[0]";
		$test = "$test_ns\\main";

		$test = new $test();
	} else echo "No test found";