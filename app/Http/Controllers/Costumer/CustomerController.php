<?php

namespace App\Http\Controllers\Costumer;

use App\Enums\OrderStatus;
use App\Models\Desk;
use App\Models\Order;
use App\Models\Tenant;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    public function index(Tenant $tenant, Desk $desk)
    {
        if($tenant->id != $desk->tenant_id){
            abort(404);
        }
        return view('customer.customer-landing', compact('tenant', 'desk'));
    }

    public function menu(Tenant $tenant, Desk $desk)
    {
        if($tenant->id != $desk->tenant_id){
            abort(404);
        }
        $categories = Category::where('tenant_id', $tenant->id)
            ->has('products')
            ->with(['products' => function ($query) {
                $query->with('media');
            }])
            ->get();
        return view('customer.menu', compact('categories', 'tenant', 'desk'));
    }

    public function verify(Tenant $tenant, Desk $desk, Order $order){
        if($tenant->id != $desk->tenant_id && $order->desk_id != $desk->id){
            abort(404);
        }

        if($order->status == OrderStatus::PENDING){
            return view('customer.order-verifying', compact('tenant', 'desk', 'order'));
        } else if($order->status == OrderStatus::COOKING) {
            return redirect()->route('customer-verified', compact('tenant', 'desk', 'order'));
        }
        abort(404);
    }

    public function verified(Tenant $tenant, Desk $desk, Order $order){
        if($tenant->id != $desk->tenant_id && $order->desk_id != $desk->id){
            abort(404);
        }
        
        return view('customer.order-completed', compact('tenant', 'desk', 'order'));
    }
}
