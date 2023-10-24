<?php

namespace App\Http\Controllers\Tenant;

use App\Models\Tenant;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;

class CategoryController extends Controller
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
        $categories = Category::where('tenant_id', $tenant->id)->filterByName($params)->paginate(3);

        return view('tenant.category.index', compact('categories', 'tenant'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Tenant $tenant)
    {
        if (!Gate::allows('viewAny', $tenant)) {
            abort(403);
        }

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
    public function update(Request $request,  Tenant $tenant)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'id' => 'required|integer|exists:categories'
        ]);
        $category = Category::find($validated['id']);

        if (!Gate::allows('viewAny', $category)) {
            abort(403);
        }

        $category->update([
            'name' => $validated['name']
        ]);
        return redirect()->route('tenant-category-index', $tenant->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Tenant $tenant)
    {
        $validated = $request->validate([
            'id' => 'required|integer|exists:categories'
        ]);
        $category = Category::find($validated['id']);

        if (!Gate::allows('viewAny', $category)) {
            abort(403);
        }
        
        $category->delete();

        return redirect()->route('tenant-category-index', $tenant->id)->with('success', 'Tenant has been deleted successfully');
    }
}
