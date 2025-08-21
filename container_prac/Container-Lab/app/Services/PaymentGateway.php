<?php

    namespace App\Services;

    class PaymentGateway
    {
        public function pay($amount){
            return "Paid {$amount} using PaymentGateway";
        }
    }

?>