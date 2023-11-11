<?php

namespace App\Http\Controllers\Tenant;

use App\Models\Desk;
use App\Models\Order;
use App\Models\Tenant;
use App\Enums\OrderStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Tenant $tenant)
    {
        //Almost all is being handled by Livewire OrderList::class
        if (!Gate::allows('viewAny', $tenant)) {
            abort(403);
        }
        return view('tenant.order.index', compact('tenant'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Tenant $tenant, Order $order)
    {
        if (!Gate::allows('viewAny', $order)) {
            abort(403);
        }

        return view('tenant.order.show', compact('order', 'tenant'));
    }

    public function nextStatus(Tenant $tenant, Order $order)
    {
        if (!Gate::allows('viewAny', $order)) {
            abort(403);
        }

        try {
            DB::beginTransaction();

            $order_status = intval($order->status);
            if($order_status == OrderStatus::CANCELED || $order_status == OrderStatus::DONE){
                return back()->with('message', 'failed');
            }
            $order->update(['status' => OrderStatus::fromValue(intval($order->status) + 1)]);

            DB::commit();
            toast('Order status updated successfully', 'success');
            return back()->with('message', 'success');
        } catch (\Exception $e) {
            DB::rollback();
            return back()->with('message', 'failed');
        }


    }

    public function cancel(Tenant $tenant, Order $order)
    {
        if (!Gate::allows('viewAny', $order)) {
            abort(403);
        }

        try {
            DB::beginTransaction();

            $order_status = intval($order->status);
            if($order_status == OrderStatus::CANCELED || $order_status >= OrderStatus::SERVING){
                return back()->with('message', 'failed');
            }
            $order->update(['status' => OrderStatus::CANCELED]);

            DB::commit();

            return back()->with('message', 'success');
        } catch (\Exception $e) {
            DB::rollback();
            return back()->with('message', 'failed');
        }
    }
}
