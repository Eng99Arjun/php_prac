<?php

namespace App\Services;

class OrderService
{
    public function __construct(protected Payment $payment) {}

    public function checkout(): string
    {
        return $this->payment->pay(200);
    }
}
