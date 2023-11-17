<?php

namespace App\Livewire;

use App\Models\Cart;
use Livewire\Component;

class TambahButton extends Component
{
    public $product;
    public $desk;
    public $cart;
    public $qty = 0;

    public function mount() {

        if(Cart::where('product_id', $this->product->id)->where('desk_id', $this->desk->id)->exists()){
            $this->cart = Cart::where('product_id', $this->product->id)->where('desk_id', $this->desk->id)->get();

            if($this->cart->count() > 1){
                foreach ($this->cart as $key => $cart) {
                    if($key != 0){
                        $cart->delete();
                    }
                }
            }
            $this->cart = $this->cart->first();

            $this->cart;
            $this->qty = $this->cart->quantity;
        }
    }

    public function createCart(int $qty)
    {
        if ($this->cart == null) {
            if ($qty > 0) {
                $this->cart = Cart::create([
                    'product_id' => $this->product->id,
                    'desk_id' => $this->desk->id,
                    'quantity' => $qty,
                ]);
            }
        } else {
            $this->cart->update(['quantity' => $qty]);
        }

        $this->qty = $qty;
        $this->dispatch('cart-created');
    }

    public function render()
    {
        return view('livewire.tambah-button');
    }
}
