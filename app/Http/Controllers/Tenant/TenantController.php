<?php

namespace App\Http\Controllers\Tenant;

use Carbon\Carbon;
use App\Models\Desk;
use App\Models\User;
use App\Models\Order;
use App\Models\Tenant;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;
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

        $desks = Desk::where('tenant_id', $tenant->id)->pluck('id');
        $order_pending = Order::whereIn('desk_id', $desks)->where('status', 'pending')->latest()->paginate(2);
        $category = Category::where('tenant_id', $tenant->id)->pluck('id');
        $totalCategory = $category->count();
        $totalProduct = Product::whereIn('category_id', $category)->count();

        // $months = ['Jan' => 0, 'Feb' => 0,'Mar' => 0,'Apr' => 0, 'May' => 0,'Jun' => 0, 'Jul' => 0, 'Aug' => 0, 'Sep' => 0, 'Oct' => 0 , 'Nov' => 0, 'Dec' => 0];

        // for this year groupby months
        // for($i = 1; $i <= 12; $i++) {
        //     $months[$i] = Order::where('created_at', 'like', '2023-'.sprintf('%02d', $i).'%')->get();
        // }
        // dd($months);
        // $monthlyData = Order::where('created_at', 'like', '2023-10%')
        //     ->get();

        // dd($monthlyData);

        // for this month groupby weeks
        // $startDate = Carbon::now()->startOfMonth(); // Mengambil tanggal awal bulan ini
        // $endDate = Carbon::now()->endOfMonth(); // Mengambil tanggal akhir bulan ini

        // $orders = Order::whereBetween('created_at', [$startDate, $endDate])
        //     ->get()
        //     ->groupBy(function ($date) {
        //         return Carbon::parse($date->created_at)->format('W');
        //     });

        // dd($orders);

        // for this week groupby days
        $startDate = now()->startOfWeek();
        $endDate = now()->endOfWeek();

        $orders = Order::whereBetween('created_at', [$startDate, $endDate])
            ->selectRaw('DATE(created_at) as date, SUM(total) as total_orders')
            ->groupBy('date')
            ->get();

        // Membuat array untuk menyimpan data order per hari
        $orderData = $orders->pluck('total_orders', 'date')->all();

        // total product by category

        $categoryData = Category::where('tenant_id', $tenant->id)->get();

        $categories = [];
        $totalProducts = [];

        foreach ($categoryData as $category) {
            $categories[] = $category->name; // Sesuaikan dengan kolom yang sesuai di model Category
            $totalProducts[] = Product::where('category_id', $category->id)->count();
        }


        return view('tenant.index', compact('categories', 'totalProducts','desks', 'orderData', 'order_pending', 'totalCategory', 'totalProduct'));
    }

    public function setting(Request $request, Tenant $tenant, User $user)
    {
        return view('tenant.setting', compact('tenant'));
    }

    public function updateSetting(Request $request, Tenant $tenant, User $user)
    {
        $validated = $request->validate([
            'name'=>'required|string',
            'tenant-user'=>'required|string',
            'phone-number'=>'required|string',
            'email'=>'required|string',
            'address'=>'required|string',
            'description'=>'required|string',
        ]);
        $tenant->update($validated);
        
        return redirect()->route('tenant-setting', $tenant->id);
    }
}
