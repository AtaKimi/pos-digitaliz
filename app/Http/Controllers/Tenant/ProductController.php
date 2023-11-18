<?php

namespace App\Http\Controllers\Tenant;

use App\Models\Tenant;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Events\ProductCreated;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Tenant $tenant)
    {
        if (!Gate::allows('viewAny', $tenant)) {
            abort(403);
        }

        $params = request()->query();
        $category_ids = Category::where('tenant_id', $tenant->id)->pluck('id');
        $products = Product::whereIn('category_id', $category_ids)->latest()->filterByName($params)->filterByCategory($params)->with('category')
            ->get();
        request()->flashOnly(['search', 'category']);
        return view('tenant.product.index', compact('products', 'tenant'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Tenant $tenant)
    {
        if (!Gate::allows('viewAny', $tenant)) {
            abort(403);
        }

        $categories = Category::where('tenant_id', $tenant->id)->get();
        return view('tenant.product.create', compact('categories', 'tenant'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Tenant $tenant)
    {
        if (!Gate::allows('viewAny', $tenant)) {
            abort(403);
        }

        $validated = request()->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|string',
            'description' => 'required|string',
            'images' => 'array|required',
            'images.*' => 'mimes:jpg,jpeg,png,bmp,gif|max:1024',
            'category_id' => 'required|exists:categories,id',
        ]);

        try {
            DB::beginTransaction();

            $product = Product::create(
                [
                    'name' => $validated['name'],
                    'price' => $validated['price'],
                    'description' => $validated['description'],
                    'category_id' => $validated['category_id'],
                ]
            );

            $product->addMultipleMediaFromRequest(['images'])->each(function ($fileAdder) {
                $fileAdder->toMediaCollection('default');
            });

            event(new ProductCreated($product));

            DB::commit();

            toast($product->name.' has been created!', 'success');
            return redirect()->route('tenant-product-index', $tenant);
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withInput()->withErrors(['error' => 'Failed to create product.']);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tenant $tenant, Product $product)
    {
        if (!Gate::allows('viewAny', $product)) {
            abort(403);
        }

        $categories = Category::where('tenant_id', $tenant->id)->get();
        return view('tenant.product.edit', compact('tenant', 'product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tenant $tenant, Product $product)
    {
        if (!Gate::allows('viewAny', $product)) {
            abort(403);
        }

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

        try {
            DB::beginTransaction();

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

            DB::commit();
            toast($product->name.'has been updated!', 'success');
            return redirect()->route('tenant-product-index', $tenant);
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withInput()->withErrors(['error' => 'Failed to update product.']);
        }
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

        if (!Gate::allows('viewAny', $product)) {
            abort(403);
        }
        try {
            DB::beginTransaction();

            $product->clearMediaCollection('default');
            $product->delete();

            DB::commit();
            toast($product->name.' has been deleted!', 'success');
            return redirect()->route('tenant-product-index', $tenant);
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withInput()->withErrors(['error' => 'Failed to delete product.']);
        }
    }

    public function updateStatus(Tenant $tenant, Product $product)
    {
        if (!Gate::allows('viewAny', $product)) {
            abort(403);
        }

        $validated = request()->validate([
            'status' => 'in:in_stock,soldout,disabled',
        ]);

        try {
            DB::beginTransaction();

            $product->update($validated);

            DB::commit();
            toast($product->name.' status has been updated!', 'success');
            return back();
        } catch (\Exception $e) {
            DB::rollback();
            return back()->with('error', 'failed');
        }
    }
}
