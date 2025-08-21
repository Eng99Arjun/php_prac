<?php

use App\Services\LoggerService;
use App\Services\OrderService;
use App\Services\PaymentGateway;
use App\Services\RequestLogger;
use App\Services\SubscriptionService;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/point', function(PaymentGateway $payment){
    return $payment->pay(100);
});


Route::get('/point-singleton', function (LoggerService $logger1) {

    $logger2 = app(LoggerService::class);

    return [
        'first'  => $logger1->log('Hello from first injection'),
        'second' => $logger2->log('Hello from second injection'),
        'same_instance' => $logger1 === $logger2
    ];
});


Route::get('/point-scoped', function () {
    $logger1 = app(LoggerService::class);
    $logger2 = app(LoggerService::class);

    return [
        'first'  => $logger1->log('Scoped test 1'),
        'second' => $logger2->log('Scoped test 2'),
        'same_instance' => $logger1 === $logger2
    ];
});

Route::get('/logger-test', function (RequestLogger $logger1) 
{
    $logger2 = app(RequestLogger::class);
    return [
        'logger1' => $logger1->log('First call'),
        'logger2' => $logger2->log('Second call'),
    ];
});

Route::get('/point2', function (OrderService $order, SubscriptionService $sub) {
    return [
        'order' => $order->checkout(),
        'subscription' => $sub->subscribe(),
    ];
});