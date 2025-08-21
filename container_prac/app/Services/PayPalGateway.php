<?php

namespace App\Services;

class PayPalGateway implements Payment
{
    public function pay($amount)
    {
        return "Paid $amount using PayPal Gateway";
    }
}
