<?php

namespace App\Livewire;

use App\Enums\OrderStatus;
use App\Models\Order;
use App\Models\OrderDetail;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Locked;

class CartTotal extends Component
{

    #[Locked]
    public $carts;
    public $tenant;
    public $desk;
    public $sub_total = 0;
    public $tax_total = 0;
    public $service_total = 0;
    public $total = 0;
    public $tax;

    #[On('cart-created')] 
    public function rerender() {
        $this->sub_total = 0;
        $this->tax_total = 0;
        $this->service_total = 0;
        $this->total = 0;
        $this->getPrice();
        $this->render();
    }
    
    public function mount($carts){
        $this->tax = $this->tenant->taxes->first();
        $this->$carts = $carts;
        $this->getPrice();
    }

    public function createOrder(){
        $order = Order::create([
            'desk_id' => $this->desk->id,
        ]);

        $order_details = collect([]);

        foreach ($this->carts as $cart) {
            $order_details[] = OrderDetail::create([
                'order_id' => $order->id,
                'product_id' => $cart->product_id,
                'quantity' => $cart->quantity,
            ]);
        }

        dd([$order, $order_details]);

    }

    protected function getPrice() {
        $this->getSubtotal();
        $this->getTax();
        $this->getService();
        $this->getTotal();
    }

    private function getSubtotal()
    {
        foreach ($this->carts as $cart) {
            $this->sub_total = $this->sub_total + $cart->total();
        }
    }

    private function getTax(){
        $this->tax_total = $this->tax->percentage * $this->sub_total / 100;
    }

    private function getService() {
        $service = $this->tenant->services->first();
        $this->service_total = $service->price;
    }

    private function getTotal() {
        $this->total = $this->sub_total + $this->tax_total + $this->service_total;
    }

    public function render()
    {
        return view('livewire.cart-total');
    }
}
