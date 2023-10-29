<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class OrderVerify extends Component
{
    public $order;
    
    #[On('OrderVerified')] 
    public function verified(){
        return redirect()->route('customer-verified');
    }

    public function render()
    {
        return view('livewire.order-verify');
    }
}
