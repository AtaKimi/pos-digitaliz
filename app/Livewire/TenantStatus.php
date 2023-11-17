<?php

namespace App\Livewire;

use Livewire\Component;

class TenantStatus extends Component
{
    public $tenant;

    public function toggleActive()
    {
        $this->tenant->update(['is_active' => !$this->tenant->is_active]);
    }

    public function render()
    {
        return view('livewire.tenant-status');
    }
}
