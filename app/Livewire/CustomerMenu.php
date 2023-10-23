<?php

namespace App\Livewire;

use Livewire\Component;

class CustomerMenu extends Component
{
    public $category;

    public function render()
    {
        return view('livewire.customer-menu');
    }
}
