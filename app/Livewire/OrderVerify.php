<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class OrderVerify extends Component
{
    public $order;
    public $tenant;
    public $desk;
    
    #[On('echo:order-verified.{order.id},OrderVerified')] 
    public function verified(){
        return redirect()->route('customer-verified', [$this->tenant->id, $this->desk->id, $this->order->id]);
    }

    public function render()
    {
        return view('livewire.order-verify');
    }
}
