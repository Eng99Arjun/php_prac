<?php

namespace App\Services;

class OrderService
{
    public function __construct(private Payment $payment) {}

    public function placeOrder()
    {
        return $this->payment->pay(100);
    }
}
