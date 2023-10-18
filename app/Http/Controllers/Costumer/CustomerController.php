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
    public function index(string $id)
    {

        // $tenant = Tenant::where('name', $name)->first();

        $tenant = Tenant::findOrFail($id);
        // return $tenant->user;

        return view('customer.customer-landing', compact('tenant'));
    }

    public function product(Request $request)
    {

        $tenant_id = $request->tenant;
        $desk_id = $request->get('desk');
        $desk = Desk::findOrFail($desk_id);

        

        if ($desk->tenant_id == $tenant_id) {
            $tenant = Tenant::findOrFail($tenant_id);
            $categories = Category::where('tenant_id', $tenant->id)
            ->has('products')
            ->with(['products' => function ($query) {
                $query->with('media');
            }])
            ->get();


            // $categories = Category::where('tenant_id', $tenant->id)->pluck('id');
            // $products = Product::whereIn('category_id', $categories)->get();
            return view('customer.menu', compact('categories', 'tenant'));
        } else {
            return redirect()->back();
        }





    }

    public function menuList()
    {
        return view('customer.menu');
    }
}
