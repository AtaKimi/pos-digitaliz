<?php

namespace App\Http\Controllers\Tenant;

use App\Models\Desk;
use App\Models\User;
use App\Models\Order;
use App\Models\Tenant;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


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
        $desks = Desk::where('tenant_id', $tenant->id)->pluck('id');
        $lastTenOrders = Order::whereIn('desk_id', $desks)->where('status', 'pending')->with('desk')->latest()->limit(10)->get();

        $categories_id = Category::where('tenant_id', $tenant->id)->pluck('id');
        $totalCategory = $categories_id->count();
        $totalProduct = Product::whereIn('category_id', $categories_id)->count();

        $params = request()->query();
        $startDate = now()->startOfWeek();
        $endDate = now()->endOfWeek();
        $formatDate = 'd';
        if (@$params['totalBy']) {
            if ($params['totalBy'] == 'monthly') {
                $startDate = now()->startOfYear();
                $endDate = now()->endOfYear();
                $formatDate = 'm';
            } else if ($params['totalBy'] == 'yearly') {
                $startDate = now()->startOfDecade();
                $endDate = now()->endOfDecade();
                $formatDate = 'y';
            }
        }

        $orderData = $this->chartTotalOrderRevenue($desks, $formatDate, $startDate, $endDate, true);

        $categories = Category::where('tenant_id', $tenant->id)->with('products')->get();
        $categories_name = $categories->pluck('name');
        $totalProducts = [];

        foreach ($categories as  $category) {
            $totalProducts[] = $category->products->count();
        }

        return view('tenant.index', compact('categories_name', 'totalProducts', 'desks', 'orderData', 'lastTenOrders', 'totalCategory', 'totalProduct'));
    }

    public function setting(Request $request, Tenant $tenant)
    {
        return view('tenant.setting', compact('tenant'));
    }

    public function updateSetting(Request $request, Tenant $tenant)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'tenant-user' => 'required|string',
            'phone-number' => 'required|string',
            'email' => 'required|string',
            'address' => 'required|string',
            'description' => 'required|string',
        ]);

        $user = $tenant->user;

        try {
            DB::beginTransaction();

            $tenant->update($validated);
            $user->name = $validated['tenant-user'];
            $user->save();

            DB::commit();
            toast('Your Profile as been updated!', 'success');
            return redirect()->back();
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withInput()->withErrors(['error' => 'Failed to update tenant.']);
        }
    }

    public function updateProfilePhoto(Request $request, Tenant $tenant, User $user)
    {
        $request->validate([
            'image' => 'mimes:jpg,jpeg,png,bmp,gif|max:1024',
        ]);

        try {
            DB::beginTransaction();
            if ($request->hasFile('image')) {
                $tenant->clearMediaCollection('default');
            };
            $tenant->addMediaFromRequest('image')->toMediaCollection('default');
            DB::commit();
            toast('Your Profile Photo as been updated!', 'success');
            return redirect()->route('tenant-setting', $tenant->id);
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withInput()->withErrors(['error' => 'Failed to update tenant.']);
        }
    }

    private function chartTotalOrderRevenue(
        $desks,
        $groupBy = "w",
        $startDate,
        $endDate,
        $sort = false
    ) {
        $orders = Order::whereIn('desk_id', $desks)->whereBetween('created_at', [$startDate, $endDate])
            ->get()
            ->groupBy(function ($date) use ($groupBy) {
                return Carbon::parse($date->created_at)->format($groupBy);
            });
        $orders_sum = [];
        foreach ($orders as $key => $order) {
            $orders_sum[$key] = $order->sum('total');
        }
        ksort($orders_sum);
        return $orders_sum;
    }
}
