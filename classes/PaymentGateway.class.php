<?php

namespace PaymentGateway;

interface IPayStrategy {
    public function pay($amount);
}

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

class PayByPayPal implements IPayStrategy {
 
    private $payPalEmail = '';
     
    public function pay($amount = 0) {
        echo "Paying ". $amount. " using PayPal<br/>";
    }
}

class ShoppingCart {
         
    public $amount = 0;
     
    public function __construct($amount = 0) {
        $this->amount = $amount;
    }
     
    public function getAmount() {
        return $this->amount;
    }
     
    public function setAmount($amount = 0) {
        $this->amount = $amount;
    }
 
    public function payAmount() {
        if($this->amount >= 500) {
            $payment = new payByCC();
        } else {
            $payment = new payByPayPal();
        }
        $payment->pay($this->amount);
    }
}
