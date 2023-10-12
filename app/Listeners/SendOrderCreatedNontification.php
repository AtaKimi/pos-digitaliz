<?php

namespace App\Listeners;

use App\Events\OrderCreated;
use App\Models\Order;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;

class SendOrderCreatedNontification
{
    /**
     * Handle the event.
     */
    public function handle(OrderCreated $event): void
    {
        dd($event->order);
    }
}
