<?php

use \TestFramework\Test;
use \PaymentGateway\ShoppingCart;

class main extends Test {
	public function __construct(){
        parent::__construct();

		$cart = new ShoppingCart(499);
		$cart->payAmount();
		$cart = new ShoppingCart(5043);
		$cart->payAmount();
	}
}