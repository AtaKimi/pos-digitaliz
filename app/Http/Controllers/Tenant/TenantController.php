<?php

namespace App\Http\Controllers\Tenant;

use App\Models\Tenant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class TenantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('can:viewAny,tenant');
    }
    public function index(Tenant $tenant)
    {
        // $response = Gate::inspect('viewAny', $tenant);
        // if ($response->allowed()) {
        //     return view('tenant.index');
        // }

        return view('tenant.index');
    }

    public function setting(Tenant $tenant)
    {
        return view('tenant.setting');
    }
}
