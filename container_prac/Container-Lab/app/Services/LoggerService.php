<?php

namespace App\Services;

class LoggerService
{
    public string $id;

    public function __construct()
    {
        // Each time a new instance is made, give it a unique ID
        $this->id = uniqid("logger_", true);
    }
    
    public function log(string $message): string
    {
        return "[{$this->id}] $message";
    }
}
