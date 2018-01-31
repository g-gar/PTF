<?php

namespace PaymentGateway;

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
            $payment = new PayByCC();
        } else {
            $payment = new PayByPayPal();
        }
        $payment->pay($this->amount);
    }
}