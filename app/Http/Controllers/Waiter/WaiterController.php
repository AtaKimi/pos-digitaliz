<?php

namespace App\Http\Controllers\Waiter;

use App\Models\Order;
use App\Models\Waiter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tenant;

class WaiterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexTenant()
    {
        return view('waiter.order-detail');
    }

    // public function indexWaiter()
    // {
    //     return view('waiter.index');
    // }

    /**
     * Display a listing of the resource.
     */
    public function indexWaiter()
    {

        $orders = Order::latest()->paginate(5);

        return view('waiter.index', compact('orders'));
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
    public function show(Waiter $waiter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Waiter $waiter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Waiter $waiter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Waiter $waiter)
    {
        //
    }
}
