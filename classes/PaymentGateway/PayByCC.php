<?php

namespace PaymentGateway;

class PayByCC implements IPayStrategy {
    private $ccNum = '';
    private $ccType = '';
    private $cvvNum = '';
    private $ccExpMonth = '';
    private $ccExpYear = '';

    public function pay($amount = 0) {
    	echo "Paying ". $amount. " using Credit Card<br/>";
    }
}