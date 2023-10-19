<?php

namespace App\Http\Controllers\Tenant;

use App\Enums\OrderStatus;
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
        $params = request()->query();

        $desks = Desk::where('tenant_id', $tenant->id)->pluck('id');
        $orders = Order::whereIn('desk_id', $desks)->filterById($params)->with('desk')->latest()->paginate(10);
        return view('tenant.order.index', compact('orders', 'tenant'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Tenant $tenant, Order $order)
    {
        return view('tenant.order.show', compact('order', 'tenant'));
    }

    public function nextStatus(Tenant $tenant, Order $order)
    {
        $order_status = intval($order->status);
        if($order_status == OrderStatus::CANCELED || $order_status == OrderStatus::DONE){
            return back()->with('message', 'failed');
        }
        $order->update(['status' => OrderStatus::fromValue(intval($order->status) + 1)]);
        return back()->with('message', 'success');
    }

    public function cancel(Tenant $tenant, Order $order)
    {
        $order_status = intval($order->status);
        if($order_status == OrderStatus::CANCELED || $order_status >= OrderStatus::SERVING){
            return back()->with('message', 'failed');
        }
        $order->update(['status' => OrderStatus::CANCELED]);
        return back()->with('message', 'success');
    }
}
