<?php

namespace App\Http\Controllers\Tenant;

use App\Models\Tenant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Waiter;
use Illuminate\Pagination\Paginator;

class WaiterController extends Controller
{
    // public function __construct()
    // {
    //     // $this->middleware('can:viewAny,tenant');
    // }
    /**
     * Display a listing of the resource.
     */
    public function index(Tenant $tenant)
    {
        $waiter = Waiter::where('tenant_id', $tenant->id)->paginate(10);

        // Paginator::useAdminPagination();

        return view('tenant.waiter', compact('waiter'));
    }

    public function update(Request $request, )
    {
        $waiterId = $request->input('id');
        $isActive = $request->input('is_active');

        $waiter = Waiter::findOrFail($waiterId);
        dd($waiter);

        if (!$waiter) {
            return response()->json(['failed' => false, 'message' => 'waiter$waiter not found']);
        }

        $waiter->is_active = $isActive;
        $waiter->save();

        return response()->json(['success' => true, 'message' => 'Tenant status updated successfully']);
    }

}
