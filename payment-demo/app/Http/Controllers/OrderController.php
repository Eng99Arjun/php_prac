<?php
    namespace App\Http\Controllers;
    use App\Services\OrderService;

    class OrderController extends Controller
    {
        public function store(OrderService $orderService)
        {
            return $orderService->placeOrder();
        }
    }

?>