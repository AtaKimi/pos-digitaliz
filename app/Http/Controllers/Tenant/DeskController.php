<?php

namespace App\Http\Controllers\Tenant;

use App\Models\Desk;
use App\Models\Tenant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DeskController extends Controller
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
        $desk = Desk::where('tenant_id', $tenant->id)->filterByName($params)->paginate(5);
        return view('tenant.desk.index', compact('desk', 'tenant'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Tenant $tenant)
    {
        $validated = request()->validate([
            "name" => 'required|string|max:255'
        ]);
        $validated['tenant_id'] = $tenant->id;
        try {
            DB::beginTransaction();

            $desk = Desk::create($validated);

            DB::commit();

            return redirect()->route('tenant-desk-index', $tenant->id);
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withInput()->withErrors(['error' => 'Failed to create desk.']);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tenant $tenant)
    {
        //
        $validated = request()->validate([
            "name" => "required|string|max:255",
            "id" => "required|integer|exists:desks",
        ]);

        $desk = Desk::find($validated['id']);

        try {
            DB::beginTransaction();
            $desk->update($validated);
            DB::commit();
            return redirect()->route('tenant-desk-index', $tenant->id);
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withInput()->withErrors(['error' => 'Failed to update desk.']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tenant $tenant)
    {
        $validated = request()->validate([
            "id" => "required|integer|exists:desks",
        ]);

        $desk = Desk::find($validated['id']);

        try {
            DB::beginTransaction();
            $desk->delete();
            DB::commit();
            return redirect()->route('tenant-desk-index', $tenant->id);
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withInput()->withErrors(['error' => 'Failed to delete desk.']);
        }
    }
}
