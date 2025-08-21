<?php

namespace App\Providers;

use App\Services\LoggerService;
use App\Services\PaymentGateway;
use App\Services\RequestLogger;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {

        
        $this->app->bind(PaymentGateway::class, function () {
            return new PaymentGateway();
        });

        
        $this->app->singleton(LoggerService::class, function () {
            return new LoggerService();
        });


       
        $this->app->scoped(\App\Services\LoggerService::class, function ($app) {
            return new \App\Services\LoggerService();
        });


        $this->app->scoped(RequestLogger::class, fn() => new RequestLogger());

            // If OrderService needs Payment → give PayPalGateway
        $this->app->when(\App\Services\OrderService::class)
                ->needs(\App\Services\Payment::class)
                ->give(\App\Services\PayPalGateway::class);

        // If SubscriptionService needs Payment → give StripeGateway
        $this->app->when(\App\Services\SubscriptionService::class)
                ->needs(\App\Services\Payment::class)
                ->give(\App\Services\StripeGateway::class);

        
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
