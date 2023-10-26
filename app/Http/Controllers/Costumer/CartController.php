<?php

namespace App\Http\Controllers\Costumer;

use App\Models\Cart;
use App\Models\Desk;
use App\Models\Tenant;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function index(Tenant $tenant, Desk $desk)
    {
        if (Cart::where('desk_id', $desk->id)->exists()) {
            redirect()->route('customer-menu', [$tenant->id, $desk->id]);
        }
        $carts = Cart::where('desk_id', $desk->id)->get();
        return view('customer.cart', compact('carts', 'tenant'));
    }
}
