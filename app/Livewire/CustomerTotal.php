<?php

namespace App\Livewire;

use App\Models\Cart;
use Livewire\Component;
use Brick\Math\BigInteger;
use Livewire\Attributes\On;

class CustomerTotal extends Component
{

    public $carts;
    public $desk;
    public $items_total = 0;
    public $total_price = 0;

    public function mount() {
        if(Cart::where('desk_id', $this->desk->id)->exists()){
            $this->carts = Cart::where('desk_id', $this->desk->id)->get();
            $this->items_total = $this->carts->sum('quantity');
            $this->total_price = 0;
            foreach ($this->carts as $cart) {
                $this->total_price = $this->total_price + $cart->total();
            }
        }

    }
    #[On('cart-created')] 
    public function cartCreated(){
        $this->mount();
        $this->render();

    }
    public function render()
    {
        return view('livewire.customer-total');
    }
}
