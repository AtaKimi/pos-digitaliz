<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use App\Models\TenantServicePayment;
use Illuminate\Http\Request;

class TenantServicePaymentController extends Controller
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
        return view('tenant.service-payment');
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
    public function show(TenantServicePayment $tenantServicePayment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TenantServicePayment $tenantServicePayment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TenantServicePayment $tenantServicePayment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TenantServicePayment $tenantServicePayment)
    {
        //
    }
}
