<?php

namespace App\Http\Controllers\Tenant;

use App\Models\Tenant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Service;

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
        $services = Service::where('serviceable_id', $tenant->id)->latest()->paginate(100);
        return view('tenant.service-payment', compact('services'));
    }
}
