<?php

namespace App\Http\Controllers\Tenant;

use App\Models\Desk;
use App\Models\Tenant;
use Illuminate\Http\Request;
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
        $desk = Desk::where('tenant_id', $tenant->id)->paginate(10);
        return view('tenant.desk', compact('desk', 'tenant'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
        $desk = Desk::create($validated);
        return redirect()->route('tenant-desk-index', $tenant->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Desk $desk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Desk $desk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tenant $tenant, Desk $desk)
    {
        //
        $validated = request()->validate([
            "name" => 'required|string|max:255'
        ]);
        // $test = Desk::findOrFail($desk->id);
        // dd($test);
        $desk->update($validated);
        return redirect()->route('tenant-desk-index', $tenant->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Desk $desk)
    {
        //
    }
}
