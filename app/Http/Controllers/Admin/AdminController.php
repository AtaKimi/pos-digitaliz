<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Desk;
use App\Models\Order;
use App\Models\Tenant;
use App\Models\TenantServicePayment;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        if (!empty($request->get('totalTenantFilter'))) {
            $totalTenantFilter = $request->get('totalTenantFilter');
        } else {
            $totalTenantFilter = 'Monthly';
        }

        // Daftar bulan yang tetap ditampilkan
        $months = ['Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

        // Mengambil data jumlah tenant untuk setiap bulan
        $monthlyData = Tenant::selectRaw("DATE_FORMAT(created_at, '%b') as month, COUNT(*) as count")
            ->groupBy("month")
            ->get();

        // Mengisi nilai tenant dengan 0 untuk bulan yang tidak ada data
        $filledData = [];

        foreach ($months as $month) {
            $found = false;
            foreach ($monthlyData as $data) {
                if ($data->month == $month) {
                    $filledData[] = [
                        'month' => $data->month,
                        'count' => $data->count,
                    ];
                    $found = true;
                    break;
                }
            }



            if (!$found) {
                $filledData[] = [
                    'month' => $month,
                    'count' => 0,
                ];
            }
        }

        $all_tenants = Tenant::all();
        // $service_data = $all_tenants->getService()
        $tenants = Tenant::latest()->paginate(11);
        $tenant_counter = Tenant::all()->count();
        $tenant_service_payments = TenantServicePayment::latest()->paginate(10);
        $total_service_all = $total_service_paid_all = $total_service_paid_all = 0;
        foreach ($all_tenants as $tenant) {
            $desk_ids = Desk::where('tenant_id', $tenant->id)->pluck('id');
            $tenant_orders = Order::whereIn('desk_id', $desk_ids)->where('status', 'done')->get();
            $tenant_service_total = 0;
            foreach ($tenant_orders as $tenant_order) {
                $service = $tenant_order->getService();
                $tenant_service_total = $tenant_service_total + $service->price;
            }
            $total_service_all = $total_service_all + $tenant_service_total;
        }
        $total_service_paid_all = TenantServicePayment::all()->sum('total');
        $total_service_unpaid_all = $total_service_all - $total_service_paid_all;

        // dd($$filledData);
        return view('admin.index', compact('totalTenantFilter',  'filledData',  'tenants', 'all_tenants', 'tenant_counter', 'tenant_service_payments', 'total_service_paid_all', 'total_service_unpaid_all'));
    }
    public function tenantManagement()
    {
        $tenants = Tenant::latest()->paginate(11);
        return view('admin.tenantmanagement', compact('tenants'));
    }

    public function detailTenant(Tenant $tenant)
    {
        return view('admin.tenant-detail');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        //
    }
}
