<?php

namespace App\Services;

class StripeGateway implements Payment
{
    public function pay($amount): string
    {
        return "Paid $amount using Stripe";
    }
}
