<?php

namespace App\Http\Controllers\Admin;

use App\Enums\OrderStatus;
use Carbon\Carbon;
use App\Models\Desk;
use App\Models\Order;
use App\Models\Tenant;
use App\Models\Waiter;
use App\Models\Product;
use App\Models\Service;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\TenantServicePayment;

class TenantController extends Controller
{
    public function index()
    {
        $tenants = Tenant::paginate(5);
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

    public function show($id)
    {
        $tenants = Tenant::findOrFail($id);
        // $waiters = $tenants->waiter;
        $waiters = Waiter::where('tenant_id', $tenants->id)->paginate(10);
        $service = $tenants->services->first();

        //get total product 
        $category = Category::where('tenant_id', $id)->pluck('id');
        $product = Product::whereIn('category_id', $category)->count();

        //card total tagihan
        $desk_ids = Desk::with('order')->where('tenant_id', $id)->pluck('id');
        $tenant_orders = Order::whereIn('desk_id', $desk_ids)->where('status', '>', OrderStatus::PENDING)->get();
        $totalTagihan = 0;
        foreach ($tenant_orders as $order) {
            $totalTagihan += $order->getService()->price;
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

        $paymentPerMonth = TenantServicePayment::where('tenant_id', $tenants->id)->paginate(5);

        // $tenantServicePaymentTotal = TenantServicePayment::where('tenant_id', 1)->sum('total');

        // $this->comment($unpaid_service_total);



        return view('admin.tenant-detail', [
            'tenants' => $tenants,
            'waiters' => $waiters,
            'product' => $product,
            'service' => $service,
            'paymentPerMonth' => $paymentPerMonth,
            'formatTotalTagihan' => $formatTotalTagihan,
            'formatUnpaidPayment' => $formatUnpaidPayment
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validate = request()->validate(
            [
                'tenant_id' => 'required',
                'user_id' => 'required',
                'transfer_at' => 'required',
                'total' => 'required|numeric',
                'image' => 'required|file|mimes:jpg,jpeg,png'
            ]
        );

        // Parse the "transfer_at" date to the "Y-m-d" format
        $parsedDate = \Carbon\Carbon::parse($validate['transfer_at'])->format('Y-m-d');

        // Update the "transfer_at" field with the parsed date
        $validate['transfer_at'] = $parsedDate;

        $create = TenantServicePayment::create($validate);
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $create->addMediaFromRequest('image')->toMediaCollection('default');
        }
        return back()->with('sukses', "ahay");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Find the tenant by ID
        $tenant = Tenant::find($id);
        // Check if the tenant exists
        if (!$tenant) {
            return redirect()->back()->with('error', 'Tenant not found');
        }
        // Delete the tenant
        $tenant->delete();
        // delete related users
        $tenant->user()->delete();

        return redirect()->route('admin-tenant-index')->with('success', 'Tenant has been deleted successfully');
    }
}
