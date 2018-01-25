<?php

require 'lib/Test.class.php';
require 'tests/classes/Facade1.class.php';

class main extends \TestFramework\Test {
	public function __construct(){
		parent::__construct();
		echo \Facade1\CaseReverseFacade::reverseStringCase("AbcdefghijklmOpqrstuvwxyZ");
	}
}