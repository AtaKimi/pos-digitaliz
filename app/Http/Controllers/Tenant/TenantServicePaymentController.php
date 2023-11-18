<?php

namespace App\Http\Controllers\Tenant;

use App\Models\Tenant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\TenantServicePayment;

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
        $params = request()->query();
        $payments = TenantServicePayment::where('tenant_id', $tenant)
        ->latest()
            ->filterById($params)
            ->orderBy('transfer_at', 'desc')
            ->paginate(5);

        return view('tenant.service-payment.index', compact('payments'));
    }
}
