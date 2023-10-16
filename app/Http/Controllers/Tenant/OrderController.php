<?php

namespace App\Http\Controllers\Tenant;
use App\Http\Controllers\Controller;
use App\Models\Desk;
use App\Models\Order;
use App\Models\Tenant;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:viewAny,tenant');
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Tenant $tenant)
    {
        $desks = Desk::where('tenant_id', $tenant->id)->pluck('id');
        $orders = Order::whereIn('desk_id', $desks)->get();
        return view('tenant.order', compact('orders', 'tenant'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Tenant $tenant, Order $order)
    {
        $order = Order::findOrFail($order->id);
        return view('tenant.order-detail', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
