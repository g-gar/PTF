<?php

require 'lib/Test.class.php';

use \TestFramework\Test;
use \Facade1\CaseReverseFacade;

class main extends Test {
	public function __construct(){
		parent::__construct();
		echo CaseReverseFacade::reverseStringCase("AbcdefghijklmOpqrstuvwxyZ");
	}
}