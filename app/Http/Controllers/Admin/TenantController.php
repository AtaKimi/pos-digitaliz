<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Desk;
use App\Models\Order;
use App\Models\Tenant;
use Illuminate\Http\Request;
use Carbon\Carbon;

class TenantController extends Controller
{
    public function index () {
        $tenants = Tenant::paginate(10);
        $tenants->each(function ($tenant) {
            // Get payments for the current month
            $currentMonthPayments = $tenant->tenant_service_payment->filter(function ($payment) {
                return Carbon::parse($payment->transfer_at)->format('Y-m') === Carbon::now()->format('Y-m');
            });

            // Set the payment status based on whether there are payments for the current month
            $tenant->payment_status = $currentMonthPayments->isEmpty() ? 'Belum bayar' : 'Sudah bayar';
        });
        // dd($tenants);
        return view('admin.tenant-management', compact('tenants'));
    }

    public function show ($id) {
        $tenants = Tenant::findOrFail($id);
        $waiters = $tenants->waiter;

        //card total tagihan
        $desk_ids = Desk::with('order')->where('tenant_id', $id)->pluck('id');
        $tenant_orders = Order::whereIn('desk_id', $desk_ids)->where('status', 'done')->get();
        $totalTagihan = 0;
        foreach ($tenant_orders as $order) {
            $totalTagihan += $order->total;
        }
        $formatTotalTagihan = 'Rp ' . number_format($totalTagihan, 0, ',', '.');

          // Calculate the total payment for the tenant
        $totalPayment = $tenants->tenant_service_payment->sum('total');
        // Format the total payment as "Rp 460.000"
        $formatTotalPayment = 'Rp ' . number_format($totalPayment, 0, ',', '.');
        // Assign the formatted total payment to the total_payment attribute
        $tenants->total_payment = $formatTotalPayment;
        $unpaid_service_total = $totalTagihan - $totalPayment;
        $formatUnpaidPayment = 'Rp ' . number_format($unpaid_service_total, 0, ',', '.');

        //payment list
        $paymentPerMonth = $tenants->tenant_service_payment->sortByDesc(function ($payment) {
            return $payment->transfer_at;
        });

        // $tenantServicePaymentTotal = TenantServicePayment::where('tenant_id', 1)->sum('total');
        
        // $this->comment($unpaid_service_total);



        return view('admin.tenant-detail', [
            'tenants' => $tenants,
            'waiters' => $waiters,
            'paymentPerMonth' => $paymentPerMonth,
            'formatTotalTagihan' => $formatTotalTagihan,
            'formatUnpaidPayment' => $formatUnpaidPayment
        ]);
    }
}
