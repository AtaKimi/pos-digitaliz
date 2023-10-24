<?php

namespace App\Livewire;

use App\Models\Desk;
use App\Models\Order;
use App\Models\Tenant;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Gate;
use Livewire\Attributes\On; 


class OrderList extends Component
{
    use WithPagination;

    public Tenant $tenant;

    protected $listeners = [
        'OrderCreated' => 'rerender',
    ];

    public function rerender(){
        $this->render();
    }

    public function render()
    {
        if (!Gate::allows('viewAny', $this->tenant)) {
            abort(403);
        }
        $params = request()->query();
        $desks = Desk::where('tenant_id', $this->tenant->id)->pluck('id');
        $orders = Order::whereIn('desk_id', $desks)->filterById($params)->with('desk')->latest()->get();

        return view('livewire.order-list', ['orders' => $orders]);
    }
}
