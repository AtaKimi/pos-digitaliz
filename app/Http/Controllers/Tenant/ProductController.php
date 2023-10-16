<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Tenant;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isEmpty;
use function PHPUnit\Framework\isNull;

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

        $params = request()->query();
        $category_ids = Category::where('tenant_id', $tenant->id)->pluck('id');
        $products = Product::whereIn('category_id', $category_ids)->filter($params)->with('category')
        ->get();
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
     * Show the form for editing the specified resource.
     */
    public function edit(Tenant $tenant, Product $product)
    {
        $categories = Category::where('tenant_id', $tenant->id)->get();
        return view('tenant.product.edit', compact('tenant', 'product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tenant $tenant, Product $product)
    {
        $validated = request()->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|string',
            'description' => 'required|string',
            'images' => 'array',
            'images.*' => 'mimes:jpg,jpeg,png,bmp,gif|max:1024',
            'product_media' => 'array',
            'product_media.*' => 'string',
            'category_id' => 'required|exists:categories,id',
        ]);

        //an existing image must exist or must be added into the product so there's atleast an image existed
        if (array_key_exists('images', $validated) || array_key_exists('product_media', $validated)) {
            $product->update(
                [
                    'name' => $validated['name'],
                    'price' => $validated['price'],
                    'description' => $validated['description'],
                    'category_id' => $validated['category_id'],
                ]
            );

            if (array_key_exists('product_media', $validated)) {
                $product_medias = $product->getMedia('default');

                foreach ($product_medias as $media) {
                    if (!in_array($media->id, $validated['product_media'])) {
                        $media->delete();
                    }
                }
            }

            if (array_key_exists('images', $validated)) {
                $product->addMultipleMediaFromRequest(['images'])->each(function ($fileAdder) {
                    $fileAdder->toMediaCollection('default');
                });
            }

            return redirect()->route('tenant-product-index', $tenant);
        }

        return redirect()->route('tenant-product-edit', [$tenant, $product]);
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
        $product->clearMediaCollection('default');
        $product->delete();
        return redirect()->route('tenant-product-index', $tenant);
    }

    public function updateStatus(Tenant $tenant, Product $product)
    {
        $validated = request()->validate([
            'status' => 'in:in_stock,soldout,disabled',
        ]);

        $product->update($validated);
        return back()->with('message', 'success');
    }
}
