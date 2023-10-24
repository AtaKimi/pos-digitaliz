<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ProductCreated implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $products;

    /**
     * Create a new event instance.
     */
    public function __construct($products)
    {
        $this->products = $products;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn()
    {
        return new Channel('products');
        // ];
    }

    public function broadcastWith()
    {
        return [
            'message' => 'New products created!',
            'data' => [
                'name' => $this->products->name,
                'price' => $this->products->price,
                'description' => $this->products->description,
                'images' => $this->products->getFirstMediaUrl('default'),
                'category_id' => $this->products->category_id,
            ]
        ];
    }
}
