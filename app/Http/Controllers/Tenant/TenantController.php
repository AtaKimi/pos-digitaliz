<?php

namespace App\Http\Controllers\Tenant;

use App\Models\Tenant;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Desk;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Pagination\Paginator;
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
        $orders = Order::whereIn('desk_id', $desks)->where('status', 'pending')->latest()->paginate(2);
        $category = Category::where('tenant_id', $tenant->id)->pluck('id');
        $totalCategory = $category->count();
        $totalProduct = Product::whereIn('category_id', $category)->count();


        return view('tenant.index', compact('desks', 'orders', 'totalCategory', 'totalProduct'));
    }

    public function setting(Request $request, Tenant $tenant, User $user)
    {
        return view('tenant.setting', compact('tenant'));
    }

    public function updateSetting(Request $request, Tenant $tenant, User $user)
    {
        $validated = $request->validate([
            'image' => 'mimes:jpg,jpeg,png,bmp,gif|max:1024',
            'name'=>'required|string',
            'tenant-user'=>'required|string',
            'phone-number'=>'required|string',
            'email'=>'required|string',
            'address'=>'required|string',
            'description'=>'required|string',
        ]);
        
        if($request->hasFile('image')){
            $tenant->clearMediaCollection('default');
            $tenant->addMediaFromRequest('image')->toMediaCollection('default');
        };
        $tenant->update($validated);
        
        return redirect()->route('tenant-setting', $tenant->id);
    }

    public function updateProfilePhoto(Request $request, Tenant $tenant)
    {
        $validate = $request->validate([
            'image' => 'mimes:jpg,jpeg,png,bmp,gif|max:1024',
        ]);

        if($request->hasFile('image')){
            $tenant->clearMediaCollection('default');
        };

        $tenant->addMediaFromRequest('image')->toMediaCollection('default');

        return back()->with('message', 'success');
    }
}
