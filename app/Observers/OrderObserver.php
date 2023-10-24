<?php

namespace App\Observers;

use App\Models\Tax;
use App\Models\Order;
use Illuminate\Support\Str;

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
}
