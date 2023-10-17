

<?php

use App\Models\Desk;
use App\Models\User;
use App\Models\Order;
use App\Models\Tenant;
use App\Models\Waiter;
use App\Models\Product;
use App\Models\Category;
use App\Events\OrderCreated;
use Illuminate\Support\Carbon;
use App\Models\TenantServicePayment;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use App\Http\Resources\Tenant\ProductResource;
use App\Listeners\SendOrderCreatedNontification;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('zaidan', function () {
    $waiter_ids = Waiter::where('tenant_id', 1)->pluck('user_id');
    $users = User::whereIn('id', $waiter_ids)->with('waiter')->get();
    dd($waiter_ids);
});

Artisan::command('rholand', function () {
    $tenant = Tenant::find(1);
    $desk_ids = Desk::where('tenant_id', $tenant->id)->pluck('id');
    $tenant_orders = Order::whereIn('desk_id', $desk_ids)->where('status', 'done')->get();
    $tenant_service_total = 0;
    foreach ($tenant_orders as $tenant_order) {
        $service = $tenant_order->getService();
        $tenant_service_total = $tenant_service_total + $service->price;
    }
    $tenantServicePaymentTotal = TenantServicePayment::where('tenant_id', 1)->sum('total');
    $unpaid_service_total = $tenant_service_total - $tenantServicePaymentTotal;
    $this->comment($unpaid_service_total);
})->purpose('Display an inspiring quote');

Artisan::command('rholand2', function () {
    $tenants = Tenant::all();
    $total_service_all = $total_service_paid_all = $total_service_unpaid_all = 0;
    foreach ($tenants as $tenant) {
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
    $this->comment($total_service_all);
    $this->comment($total_service_paid_all);
    $this->comment($total_service_unpaid_all);
})->purpose('Display an inspiring quote');
