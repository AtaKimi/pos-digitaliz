<?php

namespace App\Http\Controllers\Tenant;

use App\Models\Tenant;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $categories = Category::where('tenant_id', $tenant->id)->latest()->filterByName($params)->paginate(3);

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

        try {
            DB::beginTransaction();

            // Simpan data ke database
            $category = Category::create([
                'name'  => $validatedData['name'],
                'tenant_id' => $validatedData['tenant_id'],
            ]);

            DB::commit();
            toast('Category created successfully', 'success');
            return redirect()->route('tenant-category-index', $tenant->id);
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withInput()->withErrors(['error' => 'Failed to create category.']);
        }
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

        try {
            DB::beginTransaction();

            $category->update([
                'name' => $validated['name']
            ]);

            DB::commit();
            toast('Category updated successfully', 'success');
            return redirect()->route('tenant-category-index', $tenant->id);
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withInput()->withErrors(['error' => 'Failed to update category.']);
        }
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

        try {
            DB::beginTransaction();

            $category->delete();


            DB::commit();
            toast('Category deleted successfully', 'success');
            return redirect()->route('tenant-category-index', $tenant->id);
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withInput()->withErrors(['error' => 'Failed to delete category.']);
        }
    }
}
