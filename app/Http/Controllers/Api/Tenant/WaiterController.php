<?php

namespace App\Http\Controllers\Api\Tenant;

use App\Http\Controllers\Controller;
use App\Models\Waiter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class WaiterController extends Controller
{
    public function update(Waiter $waiter)
    {
        $tenant = request()->user()->tenant;
        dd($tenant);
        if (!Gate::allows('viewAny', $tenant)) {
            abort(403);
        }
        // $validated = request()->validate([
        //     'status' => 'in:in_stock,sold_out,disabled',
        // ]);

        // $waiter->update($validated);
        return $waiter;
        // $waiterId = $request->input('id');
        // $isActive = $request->input('is_active');

        // $waiter = Waiter::findOrFail($waiterId);
        // dd($waiter);

        // if (!$waiter) {
        //     return response()->json(['failed' => false, 'message' => 'waiter$waiter not found']);
        // }

        // $waiter->is_active = $isActive;
        // $waiter->save();

        // return response()->json(['success' => true, 'message' => 'Tenant status updated successfully']);
    }
}
