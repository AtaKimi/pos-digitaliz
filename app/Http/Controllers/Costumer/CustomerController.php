<?php

namespace App\Http\Controllers\Costumer;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Desk;
use App\Models\Product;
use App\Models\Tenant;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(Tenant $tenant, Desk $desk)
    {
        return view('customer.customer-landing', compact('tenant', 'desk'));
    }

    public function menu(Tenant $tenant, Desk $desk)
    {
        $categories = Category::where('tenant_id', $tenant->id)
            ->has('products')
            ->with(['products' => function ($query) {
                $query->with('media');
            }])
            ->get();


        // $categories = Category::where('tenant_id', $tenant->id)->pluck('id');
        // $products = Product::whereIn('category_id', $categories)->get();
        return view('customer.menu', compact('categories', 'tenant', 'desk'));
    }
}
