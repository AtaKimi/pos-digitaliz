<?php

namespace App\Http\Controllers\Api\Tenant;

use App\Models\Product;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;

class ProductController extends Controller
{
    public function index()
    {
        $tenant = request()->user()->tenant;
        if (!Gate::allows('viewAny', $tenant)) {
            abort(403);
        }

        $categories = Category::where('tenant_id', $tenant->id)->pluck('id');
        $products = Product::whereIn('category_id', $categories)->get();

        return $products;
    }

    public function show(Product $product)
    {
        $tenant = request()->user()->tenant;
        if (!Gate::allows('viewAny', $tenant)) {
            abort(403);
        }
        return $product;
    }

    public function editStatus(Product $product)
    {
        $tenant = request()->user()->tenant;
        if (!Gate::allows('viewAny', $tenant)) {
            abort(403);
        }
        $validated = request()->validate([
            'status' => 'in:in_stock,soldout,disabled',
        ]);

        $product->update($validated);
        return $product;
    }
}
