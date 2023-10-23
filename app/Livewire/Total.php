<?php

namespace App\Livewire;

use Livewire\Component;

class Total extends Component
{

    public $total;

    public function increment()
    {
        $this->total++;
    }
    public function render()
    {
        return view('livewire.total');
    }
}
