<?php

namespace App\Services;

class SubscriptionService
{
    public function __construct(protected Payment $payment) {}

    public function subscribe(): string
    {
        return $this->payment->pay(500);
    }
}
