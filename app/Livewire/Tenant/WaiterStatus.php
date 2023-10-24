<?php

namespace App\Livewire\Tenant;

use App\Models\Waiter;
use Livewire\Component;
use Illuminate\Support\Facades\Gate;

class WaiterStatus extends Component
{
    public Waiter $waiter;

    public function toggleActive()
    {
        if (!Gate::allows('viewAny', $this->waiter)) {
            abort(403);
        }
        $this->waiter->update(['is_active' => !$this->waiter->is_active]);
    }

    public function render()
    {
        return view('livewire.tenant.waiter-status', ['waiter' => $this->waiter]);
    }
}