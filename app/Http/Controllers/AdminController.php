<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Tenant;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tenants = Tenant::latest()->paginate(11);
        $tenantCounter = Tenant::all()->count();
        return view('admin.index', compact('tenants', 'tenantCounter'));
    }
    public function tenantManagement()
    {
        $tenants = Tenant::latest()->paginate(11);
        return view('admin.tenantmanagement', compact('tenants'));
    }

    public function detailTenant(Tenant $tenant)
    {
        return view('admin.tenant-detail');
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        //
    }
}
