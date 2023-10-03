<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
        $tenants = Tenant::findOrFail(3);

        // Calculate the total payment for the tenant
        $totalPayment = $tenants->tenant_service_payment->sum('total');

        // Format the total payment as "Rp 460.000"
        $formatTotalPayment = 'Rp ' . number_format($totalPayment, 0, ',', '.');

        // Assign the formatted total payment to the total_payment attribute
        $tenants->total_payment = $formatTotalPayment;
        return view('admin.tenant-detail', [
            'tenant' => $tenants
        ]);
    }
}
