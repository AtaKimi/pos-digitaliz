<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Desk;
use App\Models\Order;
use App\Models\Tenant;
use App\Enums\OrderStatus;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\TenantServicePayment;
use Illuminate\Pagination\Paginator;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $params = request()->query();
        $startDate = now()->startOfWeek();
        $endDate = now()->endOfWeek();
        $formatDate = 'd';
        if (@$params['TotalTenantFilter']) {
            if ($params['TotalTenantFilter'] == 'monthly') {
                $startDate = now()->startOfYear();
                $endDate = now()->endOfYear();
                $formatDate = 'm';
            } else if ($params['TotalTenantFilter'] == 'annually') {
                $startDate = now()->startOfDecade();
                $endDate = now()->endOfDecade();
                $formatDate = 'y';
            }
        } 

        $filledData = $this->chartTotalTenant($formatDate, $startDate, $endDate);
        $all_tenants = Tenant::all();
        // $service_data = $all_tenants->getService()
        $tenants = Tenant::latest()->paginate(11);
        $tenant_counter = Tenant::all()->count();
        $tenant_service_payments = TenantServicePayment::has('tenant')->latest()->paginate(10);
        $total_service_all = $total_service_paid_all = $total_service_paid_all = 0;
        foreach ($all_tenants as $tenant) {
            $desk_ids = Desk::where('tenant_id', $tenant->id)->pluck('id');
            $tenant_orders = Order::whereIn('desk_id', $desk_ids)->where('status', '>', OrderStatus::PENDING)->get();
            $tenant_service_total = 0;
            foreach ($tenant_orders as $tenant_order) {
                $service = $tenant_order->getService();
                $tenant_service_total = $tenant_service_total + $service->price;
            }
            $total_service_all = $total_service_all + $tenant_service_total;
        }
        $total_service_paid_all = TenantServicePayment::all()->sum('total');
        $total_service_unpaid_all = $total_service_all - $total_service_paid_all;
        Paginator::useTailwind();

        return view('admin.index', compact('filledData',  'tenants', 'all_tenants', 'tenant_counter', 'tenant_service_payments', 'total_service_paid_all', 'total_service_unpaid_all'));
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

    private function chartTotalTenant(
        $groupBy = "w",
        $startDate,
        $endDate
    ) {
        $tenants = Tenant::whereBetween('created_at', [$startDate, $endDate])
            ->get()
            ->groupBy(function ($date) use ($groupBy) {
                return Carbon::parse($date->created_at)->format($groupBy);
            });
        $tenants_sum = [];
        foreach ($tenants as $key => $tenant) {
            $tenants_sum[strval($key)]= strval(count($tenant));
        }
        ksort($tenants_sum);
        return $tenants_sum;
    }
}
