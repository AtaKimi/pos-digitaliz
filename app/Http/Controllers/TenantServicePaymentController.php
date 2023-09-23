<?php

namespace App\Http\Controllers;

use App\Models\TenantServicePayment;
use Illuminate\Http\Request;

class TenantServicePaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
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
