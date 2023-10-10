<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Tenant;
use Illuminate\Http\Request;

class ProductController extends Controller
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
        $category_ids = Category::where('tenant_id', $tenant->id)->pluck('id');
        $products = Product::whereIn('category_id', $category_ids)->get();
        return view('tenant.product.index', compact('products', 'tenant'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Tenant $tenant)
    {

        $categories = Category::where('tenant_id', $tenant->id)->get();
        return view('tenant.product.create', compact('categories', 'tenant'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Tenant $tenant)
    {
        $validated = request()->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|string',
            'description' => 'required|string',
            'images' => 'array|required',
            'images.*' => 'mimes:jpg,jpeg,png,bmp,gif|max:1024',
            'category_id' => 'required|exists:categories,id',
        ]);

        $product = Product::create($validated);
        $product->addMultipleMediaFromRequest(['images'])->each(function ($fileAdder) {
            $fileAdder->toMediaCollection('default');
        });

        return redirect()->route('tenant-product-index', $tenant);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tenant $tenant, Product $product)
    {
        return view('tenant.form-product', compact('tenant', 'product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tenant $tenant)
    {
        $validated = request()->validate(
            [
                'product_id' => 'exists:products,id',
            ]
        );

        $product = Product::find($validated['product_id']);

        $product->delete();
        return redirect()->route('tenant-product-index', $tenant);
    }
}