<?php

namespace App\Http\Controllers\Tenant;

use App\Models\Tenant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Waiter;
use Illuminate\Pagination\Paginator;

class WaiterController extends Controller
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
        $waiter = Waiter::where('tenant_id', $tenant->id)->paginate(2);

        $waiter = Waiter::where('tenant_id', $tenant->id)->paginate(10);
        // Paginator::useAdminPagination();

        return view('tenant.waiter', compact('waiter', 'tenant'));
    }

    public function update(Request $request, Tenant $tenant)
    {
            $waiterId = $request->input('id');
            $isActive = $request->input('is_active');

            $waiter = Waiter::findOrFail($waiterId);

            if (!$waiter) {
                return response()->json(['failed' => false, 'message' => 'waiter$waiter not found']);
            }

            $waiter->is_active = $isActive;
            $waiter->save();

            return response()->json(['success' => true, 'message' => 'Tenant status updated successfully']);
    }

    public function store(Tenant $tenant) {
        $validate = request()->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phone_number' => 'required|numeric|unique:users,phone_number',
            'password' => 'required|confirmed|min:8',
        ]);

        $user = User::create($validate);

        Waiter::create(
            [
                'user_id' => $user->id,
                'tenant_id' => $tenant->id,
            ]
        );

        return redirect()->route('tenant-waiter-index', $tenant->id)->with('message', 'Sukses menambahkan waiter');
    }

}
