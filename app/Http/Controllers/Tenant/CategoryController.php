<?php

namespace App\Http\Controllers\Tenant;

use App\Models\Tenant;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
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
       // $category1 = Category::all();
       $params = request()->query();
        $categories = Category::where('tenant_id', $tenant->id)->filter($params)->paginate(3);
        
        return view('tenant.category.index', compact('categories', 'tenant'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Tenant $tenant)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255'
        ]);

        $validatedData['tenant_id'] = $tenant->id;

        // Simpan data ke database
        $category = Category::create(
            [
                'name'  => $validatedData['name'],
                'tenant_id' => $validatedData['tenant_id'],
            ]
        );
        return redirect()->route('tenant-category-index', $tenant->id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  Tenant $tenant, Category $category)
    {  
        $validated = $request->validate([
            'name'=>'required|string'
        ]);
        $category->update($validated);
        
        return redirect()->route('tenant-category-index', $tenant->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Tenant $tenant, Category $category)
    {
        $category->delete();
        // delete related users
        $category->product()->delete();

        return redirect()->route('tenant-category-index', $tenant->id)->with('success', 'Tenant has been deleted successfully');
    }
}
