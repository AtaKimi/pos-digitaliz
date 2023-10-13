<?php

namespace App\Http\Controllers\Waiter;

use App\Models\Order;
use App\Models\Tenant;
use App\Models\Waiter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;

class WaiterController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:accessTenantWaiter,tenant');
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Tenant $tenant)
    {
        // $response = Gate::allows('accessTenantWaiter', $tenant);
        // dd($response);
        $orders = Order::latest()->paginate(5);

        return view('waiter.index', compact('orders'));
    }

    /**
     * Display a listing of the resource.
     */
    public function show(Tenant $tenant)
    {
        return view('waiter.order-detail');
    }

    public function profile(Tenant $tenant)
    {
        return view('waiter.profile');
    }
}
