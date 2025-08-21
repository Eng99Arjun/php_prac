<?php

namespace App\Providers;

use App\Services\OrderService;
use App\Services\Payment;
use App\Services\PaymentGateway;
use App\Services\PayPalGateway;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
// Same PaymentGateway instance shared across ALL requests
    $this->app->singleton(PaymentGateway::class, function ($app) {
        return new PaymentGateway();
    });

    $this->app->singleton(OrderService::class, function ($app) {
        return new OrderService($app->make(PaymentGateway::class));
    });
    /**
     * Bootstrap any application services.
     */
    }
    public function boot(): void
    {
        //
    }
}


