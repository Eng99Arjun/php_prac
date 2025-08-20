<?php

namespace App\Services;

class StripePayment implements Payment
{
    public function pay($amount)
    {
        return "Paid {$amount} using Stripe";
    }
}
