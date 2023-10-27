<?php

namespace App\Livewire;

use App\Models\Cart;
use Livewire\Component;
use Livewire\Attributes\On;

class CartPrice extends Component
{
    public $cart;

    #[On('cart-created')] 
    public function rerender(){
        $this->cart = Cart::find($this->cart->id);
        $this->render();
    }

    public function render()
    {
        return view('livewire.cart-price');
    }
}
