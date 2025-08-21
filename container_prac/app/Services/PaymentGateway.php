<?php

namespace App\Services;

class PaymentGateway implements Payment
{
    public function pay($amount)
    {
        return "Paid $amount using Payment Gateway";
    }
}
