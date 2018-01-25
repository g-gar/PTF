<?php

require 'lib/Test.class.php';
require 'classes/PaymentGateway.class.php';

use \TestFramework\Test;
use \PaymentGateway\shoppingCart;

class main extends Test {
	public function __construct(){
        parent::__construct();

		$cart = new ShoppingCart(499);
		$cart->payAmount();
		$cart = new ShoppingCart(5043);
		$cart->payAmount();
	}
}