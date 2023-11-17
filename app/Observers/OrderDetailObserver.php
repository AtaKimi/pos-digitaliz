<?php

namespace App\Observers;

use App\Models\OrderDetail;

class OrderDetailObserver
{
    /**
     * Handle the OrderDetail "created" event.
     */
    public function created(OrderDetail $orderDetail): void
    {
        $orderDetail->order->getPrice(); 
    }
}
