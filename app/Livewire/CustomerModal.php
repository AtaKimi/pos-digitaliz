<?php

namespace App\Livewire;

use Livewire\Component;

class CustomerModal extends Component
{
    public $product;
    public function render()
    {
        return view('livewire.customer-modal');
    }
}
