<?php

namespace App\Observers;

use App\Models\Tax;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Service;
use App\Enums\OrderStatus;
use App\Events\OrderCreated;
use App\Events\OrderVerified;

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
            $percentage = $order->desk->tenant->tax->percentage;
            $order->tax()->save(Tax::create(['percentage' => $percentage]));
        } 

        $price = $order->desk->tenant->service->price;
        $order->service()->save(Service::create(['price' => $price]));
        event(new OrderCreated($order));
    }

    public function updated(Order $order){
        $order = Order::find($order->id);
        if(intval($order->status) == OrderStatus::COOKING){
            event(new OrderVerified($order));
        }

        if(intval($order->status) == OrderStatus::SERVING){
            Cart::where('desk_id', $order->desk_id)->delete();
        }
    }
}
