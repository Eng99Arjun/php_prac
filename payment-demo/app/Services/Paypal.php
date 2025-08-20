<?php

namespace App\Services;

class PaypalPayment implements Payment
{
    public function pay($amount)
    {
        return "Paid {$amount} using PayPal";
    }
}
