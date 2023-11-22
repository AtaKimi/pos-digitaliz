<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Desk;
use App\Models\Order;
use App\Models\Tenant;
use App\Models\Waiter;
use App\Models\Product;
use App\Models\Service;
use App\Models\Category;
use App\Enums\OrderStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\TenantServicePayment;

class TenantController extends Controller
{
    public function index()
    {
        $params = request()->query();
        $tenants = Tenant::latest()->filterByName($params)->paginate(20);
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
        $params = request()->query();
        $waiters = Waiter::where('tenant_id', $tenants->id)->latest()->paginate(10);
        $service = $tenants->service;

        //get total product 
        $category = Category::where('tenant_id', $id)->pluck('id');
        $product = Product::whereIn('category_id', $category)->count();

        //card total tagihan
        $desk_ids = Desk::with('order')->where('tenant_id', $id)->pluck('id');
        $tenant_orders = Order::whereIn('desk_id', $desk_ids)->where('status', '>', OrderStatus::PENDING)->get();
        $totalTagihan = 0;
        foreach ($tenant_orders as $order) {
            $totalTagihan += $order->service->price;
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

        $paymentPerMonth = TenantServicePayment::where('tenant_id', $tenants->id)->latest()->paginate(15);

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
    public function tenantServiceStore(Request $request)
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

        try {
            DB::beginTransaction();
            // Parse the "transfer_at" date to the "Y-m-d" format
            $parsedDate = \Carbon\Carbon::parse($validate['transfer_at'])->format('Y-m-d');

            // Update the "transfer_at" field with the parsed date
            $validate['transfer_at'] = $parsedDate;

            $create = TenantServicePayment::create($validate);
            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                $create->addMediaFromRequest('image')->toMediaCollection('default', 'media_payment_image');
            }
            DB::commit();
            toast('Tenant service payment created!', 'success');

            return redirect()->back();
        } catch (\Exception $e) {
            DB::rollback();
            toast('Tenant service payment failed to create!', 'error');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        // Find the tenant by ID
        $validated = request()->validate([
            'tenant_id' => 'required|exists:tenants,id'
        ]);
        try {
            DB::beginTransaction();
            $tenant = Tenant::findOrFail($validated['tenant_id']);
            $tenant->delete();
            $tenant->user()->delete();
            DB::commit();
            toast('Tenant deleted!', 'success');
            return redirect()->back();
        } catch (\Exception $e) {
            DB::rollback();
            toast('Tenant failed to be deleted!', 'error');
            return redirect()->back();
        }
    }

    public function updateService(Tenant $tenant)
    {
        $validated = request()->validate(
            [
                'price' => 'integer|required',
            ]
        );

        try {
            DB::beginTransaction();
            $tenant->service->delete();
            $tenant->service()->save(Service::create($validated));
            DB::commit();
            toast('Tenant service updated!', 'success');
            return redirect()->back();
        } catch (\Exception $e) {
            DB::rollback();
            toast('Tenant service failed to be updated!', 'error');
            return redirect()->back();
        }
    }
}
