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

    public $params;
    public $url;

    #[On('echo:orders,OrderCreated')]
    public function rerender(){
        $this->render();
    }

    public function render()
    {
        if (!Gate::allows('viewAny', $this->tenant) && !Gate::allows('accessTenantWaiter', $this->tenant)) {
            abort(403);
        }
        $params = request()->query();
        $desks = Desk::where('tenant_id', $this->tenant->id)->pluck('id');
        $orders = Order::whereIn('desk_id', $desks)->filterByCode($params)->with('desk')->latest()->paginate(10);
        return view('livewire.order-list', ['orders' => $orders]);
    }
}
