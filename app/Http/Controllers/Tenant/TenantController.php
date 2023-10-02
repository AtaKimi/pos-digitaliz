<?php

namespace App\Http\Controllers\Tenant;
use App\Http\Controllers\Controller;
use App\Models\Tenant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class TenantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Tenant $tenant)
    {

        $response = Gate::inspect('viewAny', $tenant);

        if ($response->allowed()) {
            return view('tenant.index');
        }
        abort(403);



    }

    public function category()
    {
        return view('tenant.category');
    }

    public function tenantOrderDetail()
    {
        return view('tenant.order-detail');
    }
    public function servicePayment()
    {
        return view('tenant.service-payment');
    }

    public function formProduct()
    {
        return view('tenant.form-product');
    }

    public function setting()
    {
        return view('tenant.setting');
    }
    public function waiter()
    {
        return view('tenant.waiters-list');
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
    public function show(Tenant $tenant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tenant $tenant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tenant $tenant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tenant $tenant)
    {
        //
    }
}
