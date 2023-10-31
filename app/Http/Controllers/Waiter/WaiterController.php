<?php

namespace App\Http\Controllers\Waiter;

use App\Models\User;
use App\Models\Order;
use App\Models\Tenant;
use App\Models\Waiter;
use App\Enums\OrderStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rules\Password;
use App\Http\Requests\ProfileUpdateRequest;

class WaiterController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:accessTenantWaiter,tenant');
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Tenant $tenant)
    {
        // $response = Gate::allows('accessTenantWaiter', $tenant);
        // dd($response);
        $orders = Order::latest()->paginate(5);

        return view('waiter.index', compact('orders', 'tenant'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Tenant $tenant, Order $order)
    {
        if (!Gate::allows('waiterView', $order)) {
            abort(403);
        }

        return view('waiter.order-detail', compact('order', 'tenant'));
    }

    public function nextStatus(Tenant $tenant, Order $order)
    {
        if (!Gate::allows('waiterView', $order)) {
            abort(403);
        }

        try {
            DB::beginTransaction();

            $order_status = intval($order->status);
            if($order_status == OrderStatus::CANCELED || $order_status == OrderStatus::DONE){
                return back()->with('message', 'failed');
            }
            $order->update(['status' => OrderStatus::fromValue(intval($order->status) + 1)]);

            DB::commit();
            toast('Order status updated to'.$order_status , 'success');
            return back();
        } catch (\Exception $e) {
            DB::rollback();
            return back()->with('error', 'failed');
        }


    }

    public function cancel(Tenant $tenant, Order $order)
    {
        if (!Gate::allows('viewAny', $order)) {
            abort(403);
        }

        try {
            DB::beginTransaction();

            $order_status = intval($order->status);
            if($order_status == OrderStatus::CANCELED || $order_status >= OrderStatus::SERVING){
                return back()->with('message', 'failed');
            }
            $order->update(['status' => OrderStatus::CANCELED]);

            DB::commit();
            toast('Order was canceled successfully', 'success');
            return back();
        } catch (\Exception $e) {
            DB::rollback();
            return back()->with('error', 'failed');
        }
    }

    public function profile(Tenant $tenant, Request $request)
    {
        return view(
            'waiter.profile',
            [
                'user' => $request->user(),
                'tenant' => $tenant
            ]
        );
    }

    public function update(Request $request, Tenant $tenant)
    {

        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone_number' => 'required ',
        ]);

        try {
            DB::beginTransaction();
            $request->user()->update($validated);
            DB::commit();
            toast('Your profile as been updated!', 'success');
            return back();
        } catch (\Exception $e) {
            DB::rollback();
            return back()->with('error', 'An error occurred while updating the profile.');
        }
    }

    public function changePassword(Request $request, Tenant $tenant): RedirectResponse
    {
        $validated = $request->validateWithBag('updatePassword', [
            'current_password' => ['required', 'current_password'],
            'password' => ['required', Password::defaults(), 'confirmed'],
        ]);

        try {
            DB::beginTransaction();
            $request->user()->update([
                'password' => Hash::make($validated['password']),
            ]);
            DB::commit();
            toast('Your password as been updated!', 'success');
            return back();
        } catch (\Exception $e) {
            DB::rollback();
            return back()->with('error', 'An error occurred while updating the password.');
        }
    }

    public function updatePhoto(Request $request, Tenant $tenant)
    {
        $request->validate([
            'image' => 'mimes:jpg,jpeg,png,bmp,gif|max:1024',
        ]);

        try {
            DB::beginTransaction();
            if($request->hasFile('image')){
                $request->user()->clearMediaCollection('default');
            };
            $request->user()->addMediaFromRequest('image')->toMediaCollection('default');
            DB::commit();
            toast('Your Profile Photo as been updated!', 'success');
            return redirect()->back();
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withInput()->withErrors(['error' => 'Failed to update tenant.']);
        }
    }
}
