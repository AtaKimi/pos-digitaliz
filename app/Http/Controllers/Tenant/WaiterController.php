<?php

namespace App\Http\Controllers\Tenant;

use App\Models\User;
use App\Models\Tenant;
use App\Models\Waiter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
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
        $params = request()->query();
        $waiter_ids = Waiter::where('tenant_id', $tenant->id)->pluck('user_id');
        $users = User::whereIn('id', $waiter_ids)->latest()->filterByName($params)->with('waiter')->paginate(10);
        // Paginator::useAdminPagination();

        return view('tenant.waiter.index', compact('users', 'tenant'));
    }

    public function store(Tenant $tenant)
    {
        $validate = request()->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phone_number' => 'required|numeric|unique:users,phone_number',
            'password' => 'required|confirmed|min:8',
        ]);

        try {
            DB::beginTransaction();

            // Simpan data ke database
            $user = User::create([
                'name'  => $validate['name'],
                'email' => $validate['email'],
                'phone_number' => $validate['phone_number'],
                'password' => bcrypt($validate['password']),
            ]);

            Waiter::create(
                [
                    'user_id' => $user->id,
                    'tenant_id' => $tenant->id,
                ]
            );

            DB::commit();
            toast('Waiter created successfully', 'success');
            return redirect()->back();
        } catch (\Exception $e) {
            DB::rollback();
            toast('Waiter created successfully', 'error');
            return redirect()->back();
        }
    }
}
