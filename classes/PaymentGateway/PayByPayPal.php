<?php

namespace PaymentGateway;

class PayByPayPal implements IPayStrategy {
 
    private $payPalEmail = '';
     
    public function pay($amount = 0) {
        echo "Paying ". $amount. " using PayPal<br/>";
    }
}
