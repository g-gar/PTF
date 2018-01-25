<?php

require 'lib/Test.class.php';
require 'tests/classes/PaymentGateway.class.php';

class main extends \TestFramework\Test {
	public function __construct(){
        parent::__construct();

		$cart = new \PaymentGateway\shoppingCart(499);
		$cart->payAmount();
		$cart = new \PaymentGateway\shoppingCart(5043);
		$cart->payAmount();
	}
}