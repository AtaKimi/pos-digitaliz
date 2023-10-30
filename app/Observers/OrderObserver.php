<?php

namespace App\Observers;

use App\Enums\OrderStatus;
use App\Events\OrderVerified;
use App\Models\Tax;
use App\Models\Order;

class OrderObserver
{
    /**
     * Handle the Order "created" event.
     */
    public function created(Order $order): void
    {
        $code = $order->desk->tenant->code . sprintf("%06d", $order->id);
        $order->update(['code' => $code]);

        if ($order->desk->tenant->is_tax) {
            $percentage = $order->desk->tenant->taxes->first()->percentage;
            $order->tax()->save(Tax::create(['percentage' => $percentage]));
        } 
    }

    public function updated(Order $order){
        $order = Order::find($order->id);
        if(intval($order->status) == OrderStatus::COOKING){
            event(new OrderVerified($order));
        }
    }
}
