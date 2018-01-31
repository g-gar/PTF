<?php

use \TestFramework\Test;
use \TestFramework\TestCase;
use \TestFramework\Assert\Assert;

use \Cine\Cine;

class main extends Test {
	public function __construct(){
		print_r(new Cine());
	}
}