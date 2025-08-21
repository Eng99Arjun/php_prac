<?php

namespace App\Services;

class RequestLogger
{
    public string $id;

    public function __construct()
    {
        // Generate a unique ID per instance
        $this->id = uniqid("req_", true);
    }

    public function log(string $message): string
    {
        return "[{$this->id}] $message";
    }
}
