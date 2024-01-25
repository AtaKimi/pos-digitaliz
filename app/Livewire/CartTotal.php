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
    public $is_tax;

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
        if($this->desk->tenant->id != $this->tenant->id){
            abort(404);
        }
        
        $this->tax = $this->is_tax ? $this->tenant->tax : 0;
        $this->$carts = $carts;
        $this->getPrice();
    }

    public function createOrder(){
        if($this->desk->tenant->id != $this->tenant->id){
            abort(404);
        }

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

        $order->getPrice();
        redirect()->route('customer-verify', [$this->tenant->id, $this->desk->id, $order->id]);
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
        $this->tax_total = $this->is_tax != 0 ? $this->tax->percentage * $this->sub_total / 100 : 0;
    }

    private function getService() {
        $service = $this->tenant->service;
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
