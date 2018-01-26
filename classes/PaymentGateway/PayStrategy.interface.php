<?php

namespace PaymentGateway;

interface IPayStrategy {
    public function pay($amount);
}