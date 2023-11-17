<?php

namespace App\Livewire;

use Livewire\Component;

class TaxStatus extends Component
{

    public $tenant;

    public function toggleActive(){
        $this->tenant->update(['is_tax' => !$this->tenant->is_tax]);
    }

    public function render()
    {
        return view('livewire.tax-status');
    }
}
