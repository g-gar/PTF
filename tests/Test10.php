<?php

require 'lib/Test.class.php';

use \TestFramework\Test;
use \TestFramework\TestCase;
use \TestFramework\Assert;

use \Cine\Cine;

class main extends Test {
	public function __construct(){
		require "classes/Cine/Estado.enum.php";

		print_r(new Cine());
	}
}

