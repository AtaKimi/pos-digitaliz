<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Desk;
use App\Models\Order;
use App\Models\Product;
use App\Models\Tenant;
use App\Models\TenantServicePayment;
use Illuminate\Http\Request;
use Carbon\Carbon;

class TenantController extends Controller
{
    public function index () {
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

    public function show ($id) {
        $tenants = Tenant::findOrFail($id);
        $waiters = $tenants->waiter;

        //get total product 
        $category = Category::where('tenant_id', $id)->pluck('id');
        $product = Product::whereIn('category_id', $category)->count();

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
            'product' => $product,
            'paymentPerMonth' => $paymentPerMonth,
            'formatTotalTagihan' => $formatTotalTagihan,
            'formatUnpaidPayment' => $formatUnpaidPayment
        ]);
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
        $validate = request()->validate(
            [
                'tenant_id' => 'required',
                'user_id' => 'required',
                'transfer_at' => 'required|date',
                'total'=> 'required|numeric',
                'image' => 'required|file|mimes:jpg,jpeg,png'
            ]
        );

        // Parse the "transfer_at" date to the "Y-m-d" format
        $parsedDate = \Carbon\Carbon::parse($validate['transfer_at'])->format('Y-m-d');

        // Update the "transfer_at" field with the parsed date
        $validate['transfer_at'] = $parsedDate;

        $create = TenantServicePayment::create($validate);
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $create->addMediaFromRequest('image')->toMediaCollection('buktiTf');
        }
        if ($create) {
            return back()->with('sukses', "ahay");
        }

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
        $tenantId = $request->input('tenant_id');
        $isActive = $request->input('is_active');

        $tenant = Tenant::find($tenantId);

        if (!$tenant) {
            return response()->json(['success' => false, 'message' => 'Tenant not found']);
        }

        $tenant->is_active = $isActive;
        $tenant->save();

        return response()->json(['success' => true, 'message' => 'Tenant status updated successfully']);

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
