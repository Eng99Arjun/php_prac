<?php

namespace App\Services;

interface Payment
{
    public function pay($amount): string;
}
