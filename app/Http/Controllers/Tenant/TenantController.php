<?php

namespace App\Http\Controllers\Tenant;

use App\Models\Tenant;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Desk;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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

        $desks = Desk::where('tenant_id', $tenant->id)->pluck('id');
        $orders = Order::whereIn('desk_id', $desks)->where('status', 'pending')->get();









        // $order = Order::where('desk_id', $desks->id)
        return view('tenant.index', compact('desks', 'orders'));
    }

    public function setting(Tenant $tenant)
    {
        return view('tenant.setting', compact('tenant'));
    }
}
